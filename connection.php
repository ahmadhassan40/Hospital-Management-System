<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_assignment2";
/*
$connection =*/

$conn = mysqli_connect($servername,$username,$password,$database);
if($conn){
	echo "connected";
}

?>