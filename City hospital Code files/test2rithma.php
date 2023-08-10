<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:lightblue;">
<header data-aos="fade-up">

<?php

include("headerr.php")

?>
    </header>
    <br><br> <br><br> 
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Search your Lab Appointments</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="nic" value="<?php if(isset($_GET['nic'])){echo $_GET['nic'];} ?>" class="form-control" placeholder="Enter NIC">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","cityhospital_db");

                                    if(isset($_GET['nic']))
                                    {
                                        $nic = $_GET['nic'];

                                        $query = "SELECT * FROM labappointments WHERE NIC='$nic' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['name']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">NIC</label>
                                                    <input type="text" value="<?= $row['NIC']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Phone No</label>
                                                    <input type="text" value="<?= $row['mobile']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Date</label>
                                                    <input type="text" value="<?= $row['date']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    
    <div class="form-container" style=" background: url(./images/96944.webp)">
<form method="post">

  <div class="container" style="height: 550px ;width:450px; background-color: rgb(255, 255, 255,0.3)">
    <h1>Book Now</h1>
    
    <hr>
    
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required style="width: 400px; padding:10px;" >
    <br>

    <label for="NIC"><b> NIC</b></label>
    <input type="text" placeholder="Enter User ID" name="NIC" id="NIC" required style="width: 400px; padding:10px;" >
    

    <label for="mobil"><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile" name="mobile" id="mobile" required style="width: 400px; padding:10px;" >

    <label for="date"><b>Date</b></label>
    <input type="date" placeholder="" name="date" id="date" required style="width: 400px; padding:10px;" >
 
    <label for="time"><b>Time</b></label>
    <input type="time" placeholder="" name="time" id="time" required style="width: 400px; padding:10px;" >
  
    <hr>

    <button type="submit" name="submit" class="registerbtn" style="background-color:green; display:inline-block ; width: 150px; height: 60px;  background-color: rgb(7, 103, 7);  color: white;text-transform: uppercase; " >Send</button >
    
  </div>
  
</form>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php

include('admin/db_connect.php');



 if(isset($_POST['submit'])){

    $nic = $_POST['NIC'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $insert = "insert into labappointments(NIC,name,mobile,date)values('$nic','$name','$mobile','$date-$time')";

    $query= mysqli_query($conn,$insert);

    if($query){

    	?>

    	<script>

    	swal({
         title: "Sent",
         text: " We will contact you soon",
         icon: "success",
         });



    	</script>

    	<?php

    }else{

    	?>

    	<script>

    	swal({
         title: "Failed",
         text: "Data not insertd",
         icon: "error",
         });



    	</script>

    	<?php


    }


 }


?>