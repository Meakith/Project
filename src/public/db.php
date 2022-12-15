<?php
$servername = "localhost";
$database = "PROJECT";
$username = "tomas";
$password = "root";

$con = new mysqli($servername, $username, $password, $database);

if (!$con) {
    die("Failed to connect: " . mysqli_connect_error());
};
