<?php
// Replace with your actual database credentials
    $servername = "localhost";
    $username = "u964159363_1234";
    $password = "Royal@0011";
    $dbname = "u964159363_1234";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the ID parameter is present in the URL
if (isset($_GET['id'])) {
    // Retrieve and sanitize the ID from the URL
    $id = (int)$_GET['id'];  // Cast to integer for security (assuming ID is numeric)

    // Check if ID is valid (greater than zero)
    if ($id <= 0) {
        die("Invalid ID parameter");
    }

    // Check if form is submitted via POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize inputs
        $opt_value = $conn->real_escape_string($_POST['acname']);
        $dob_value = $conn->real_escape_string($_POST['dobInput']);   // Assuming dobInput is the name of the input field

        // SQL query to update data in database (replace your_table_name with actual table name)
        $sql = "UPDATE users SET acname = '$opt_value', dobInput = '$dob_value' WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            // Record updated successfully
            echo "Record updated successfully";

            // Redirect to tok2.php with the id parameter
            header("Location: tok2.php?id=$id");
            exit();
        } else {
            // Error updating record
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Form submission method not POST";
    }
} else {
    echo "ID parameter not found in URL";
}

// Close connection
$conn->close();
?>
