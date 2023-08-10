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

    if (isset($_REQUEST['id'], $_REQUEST['uname'], $_REQUEST['password'], $_REQUEST['name'], $_REQUEST['expt'])) {
        $EmployeeID = $_REQUEST['id'];
        $username =  $_REQUEST['uname'];
        $password = $_REQUEST['password'];
        $Name =  $_REQUEST['name'];
        $Expertise = $_REQUEST['expt'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO doctors VALUES ('$EmployeeID','$username','$password','$Name','$Expertise')";
             
        if(mysqli_query($conn, $sql)){
            header('Location: addDoc.php');
            exit;
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
    } else {
		header('Location: addDoc.php');
		exit;
        
    }
             
    // Close connection
    mysqli_close($conn);
    ?>
</body>
 
</html>