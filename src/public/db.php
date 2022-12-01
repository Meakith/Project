<?php
$servername = "localhost";
$database = "PROJECT";
$username = "tomas";
$password = "root";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
mysqli_close($con);
?>