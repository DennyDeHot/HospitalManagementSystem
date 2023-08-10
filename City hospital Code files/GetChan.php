<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php


$conn = mysqli_connect("localhost", "root", "", "cityhospitals");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 6 values from the form data(input)
		$Patient_No = $_REQUEST['pno'];
		$NIC = $_REQUEST['nic'];
        $Patient_Name =  $_REQUEST['pname'];
        $Age = $_REQUEST['age'];
        $Date =  $_REQUEST['date'];
        $Time = $_REQUEST['time'];
        $Doctor_Name = $_REQUEST['dname'];
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO docchanel VALUES ('$Patient_No','$NIC','$Patient_Name','$Age','$Date','$Time','$Doctor_Name')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Succsessfull atempt."
                . "</h3>";
 
            echo nl2br("$Patient_No\n$NIC\n $Patient_Name\n $Age\n $Date\n"
                . "$Time\n $Doctor_Name");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
</body>
</html>