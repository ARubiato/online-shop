<?php
$uname = "root";
$pass = "";
$localhost = "localhost";
$dbname = "online-shop";

$conn = mysqli_connect($localhost,$uname,$pass,$dbname) or die("Error in connecting to dbase!" .mysqli_error());



?>