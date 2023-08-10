<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
    }
    .back-button {
        display: block;
        margin: 10px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
    }
    .back-button:hover {
        background-color: #3e8e41;
    }
    h2 {
        color: #23D8D5;
        text-align: center;
    }
    p {
        color: #23D8D5;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
</head>

<body>
    <a href="login.html" class="back-button">Back</a>
    <h2>Welocme Dear Doctor</h2>
    <p>Your appoinments:</p> 
    <?php
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cityhospitals";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT patient_No, NIC, patient_Name, Age, Date, Time, Doctor_Name FROM docchanel";
        $result = $conn->query($sql);
		

        if ($result->num_rows > 0) {
            echo "<table style='border: 1px solid black;'><tr style='border: 1px solid black;'><th style='border: 1px solid black;'>patient_No</th><th style='border: 1px solid black;'>NIC</th><th style='border: 1px solid black;'>patient_Name</th><th style='border: 1px solid black;'>Age</th><th style='border: 1px solid black;'>Date</th><th style='border: 1px solid black;'>Time</th><th style='border: 1px solid black;'>Doctor_Name</th><th style='border: 1px solid black;'>Action</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr style='border: 1px solid black;'><td style='border: 1px solid black;'>".$row["patient_No"]."</td><td style='border: 1px solid black;'>".$row["NIC"]."</td><td style='border: 1px solid black;'>".$row["patient_Name"]."</td></td><td style='border: 1px solid black;'>".$row["Age"]."</td></td><td style='border: 1px solid black;'>".$row["Date"]."</td></td><td style='border: 1px solid black;'>".$row["Time"]."</td></td><td style='border: 1px solid black;'>".$row["Doctor_Name"]."</td><td style='border: 1px solid black;'><a href='DoctView.php?Patient_No=".$row['patient_No']."' class='back-button'>delete</a></td></tr>";
            }

            if (isset($_GET['Patient_No'])) {
                $sql1 = "DELETE FROM docchanel WHERE patient_No='$_GET[Patient_No]'";
                $result = $conn->query($sql1);
            }

            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
    } catch(customException $e) {
        echo 'Exception Message: ' .$e->getMessage();
    }
    ?>
</body>
</html>