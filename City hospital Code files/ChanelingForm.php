<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .error {
            color: red;
        }
        form {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="time"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
		  }
		.back-button {
        position: absolute;
        top: 20px;
        right: 20px;
        padding: 10px 15px;
        background-color: #333;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .back-button:hover {
        background-color: #555;
    }
    </style>
</head>
<body>
<a href="Doctor_chanaling.php" class="back-button">Back</a>
	 <font color= "#23D8D5"><h2 align="center">Make your appoiment here&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 
     </h2>
  </font> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Patient_No = $_POST["pno"];
    $nic = $_POST["nic"];
    $Patient_Name = $_POST["pname"];
    $Age = $_POST["age"];
    $Date = $_POST["date"];
    $Time = $_POST["time"];
    $Doctor_Name = $_POST["dname"];

    // data validation 
    if (empty($nic)) {
        echo "<span class='error'>NIC number is required</span>";
    } elseif (!preg_match("/^[0-9]{9}[vVxX]$/", $nic)) {
        echo "<span class='error'>Invalid NIC number format</span>";
    }

    if (empty($Patient_Name)) {
        echo "<span class='error'>Patient name is required</span>";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $Patient_Name)) {
        echo "<span class='error'>Only letters and white space allowed in patient name</span>";
    }

    if (empty($Age)) {
        echo "<span class='error'>Age is required</span>";
    } elseif ($Age < 0 || $Age > 150) {
        echo "<span class='error'>Invalid age</span>";
    }

    if (empty($Date)) {
        echo "<span class='error'>Date is required</span>";
    }

    if (empty($Time)) {
        echo "<span class='error'>Time is required</span>";
    }

    if (empty($Doctor_Name)) {
        echo "<span class='error'>Doctor name is required</span>";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $Doctor_Name)) {
        echo "<span class='error'>Only letters and white space allowed in doctor name</span>";
    }
}
?>

<form method="post" action="GetChan.php">
<label for="pno">Patient No:</label>
  <input type="text" id="pno" name="pno" readonly>
  <label for="nic">NIC number:</label>
  <input type="text" id="nic" name="nic">
  <label for="PatientName">Patient Name:</label>
  <input type="text" id="pname" name="pname">
  <label for="age">Age:</label>
  <input type="number" id="age" name="age">
  <label for="Date">Date:</label>
  <input type="date" id="date" name="date">
  <label for="time">Time:</label>
  <input type="time" id="time" name="time">
  <label for="DoctorName">Doctor Name:</label>
  <input type="text" id="dname" name="dname">
  <input type="submit" value="Submit">
</form>

</body>
</html>