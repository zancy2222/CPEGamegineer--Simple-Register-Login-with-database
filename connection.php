<?php 
// $con = mysqli_connect('localhost:3307', 'root', '', 'userform');

$servername = "localhost:3307";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "userform"; // Your MySQL database name

$con = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
