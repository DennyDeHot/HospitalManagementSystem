<?php
// Display error messages for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityhospitals";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if (isset($_POST['login'])) {
    // Get the submitted username and password
    $user = $_POST['uname'];
    $password = $_POST['pswd'];

    // Create a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM doctors WHERE username = ? AND password = ? LIMIT 1");
    $stmt->bind_param("ss", $user, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching user was found
    if ($result->num_rows > 0) {
       header("Location: DoctView.php");
exit();
    } else {
        echo "Username or password incorrect";
        exit();
    }
}

?>