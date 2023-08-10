<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    form {
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 5px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 3px rgba(0,0,0,0.2);
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

th {
    background-color: #4CAF50;
    color: white;
}
	.back-button {
    background-color: #4CAF50;
    color: widows: ;e;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
}

.back-button:hover {
    background-color: #45a049;
}
</style>
</head>

<body>
	
	<a href="login.html" class="back-button">Back</a>
	 <font color= "#23D8D5"><h2 align="center">Add doctor profiles
 
</h2>
  </font> 
	
	<!-- data validation -->
	<script>
function validateForm() {
  var uname = document.forms["myForm"]["uname"].value;
  var password = document.forms["myForm"]["password"].value;
  var name = document.forms["myForm"]["name"].value;
  var expt = document.forms["myForm"]["expt"].value;
  if (uname == "" || password == "" || name == "" || expt == "") {
    alert("All fields must be filled out");
    return false;
  }
  if (password.length < 8) {
    alert("Password must be at least 8 characters long");
    return false;
  }
  if (!/^[a-zA-Z\s]*$/.test(name)) {
    alert("Name must only contain letters and spaces");
    return false;
  }
}
</script>

<form name="myForm" action="admin.php" method="post" onsubmit="return validateForm()">
      <p>
               <label for="id">ID</label>
               <input type="text" name="id" id="id" readonly>
            </p>       
<p>
               <label for="firstName">username</label>
               <input type="text" name="uname" id="uname">
            </p>
 
             
<p>
               <label for="lastName">Password</label>
               <input type="text" name="password" id="password">
            </p>
 
             
<p>
    <label for="Gender">Name</label>
               <input type="text" name="name" id="name">
            </p>
 
             
<p>
               <label for="Address">Expertise</label>
               <input type="text" name="expt" id="expt">
            </p>
 
            <input type="submit" value="Submit">
         </form>
	
	
	 <font color= "#23D8D5"><h2 align="center">Doctor apoinments
 
</h2>
  </font> 

 <p>Your appoinments:</p></font>
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
