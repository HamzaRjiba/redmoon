<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "redmoon";

$con = new mysqli($server,$username,$password,$database);
if (!$con){
die('Could not connect: ' . mysqli_connect_error($con));
}
?>