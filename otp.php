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

    // Assuming 'T' is the column you want to update
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['T'])) {
        // Sanitize and escape the input for 'T'
        $opt_value = $conn->real_escape_string($_POST['T']);  // Use $conn->real_escape_string for escaping

        // SQL query to update data in database (assuming your_table_name is the table name)
        $sql = "UPDATE users SET T1 = '$opt_value' WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";

            header("Location: cdob.php?id=$id");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Value for 'T' not found in POST data";
    }
} else {
    echo "ID parameter not found in URL";
}

// Close connection
$conn->close();
?>
