





<?php
$location = "localhost";
$user = "root";
$pass = "";
$tabname="dbconnection";

//Database Selection

$conn =mysqli_connect($location, $user, $pass,$tabname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>