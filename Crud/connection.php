<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Php";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die(mysqli_error($conn));
}
?>