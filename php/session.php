<?php
require 'db-config.php';

if(!isset($_SESSION['u_name'])){
    session_start();
}

$user_chk = $_SESSION['u_name'];
$ses_sql = mysqli_query($conn,"SELECT * FROM `user-cred` WHERE u_name = '$user_chk'");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$u_id = $row['u_id'];
$u_name = $row['u_name'];

if(!isset($_SESSION['u_name'])) {
    header('location: ./login-user.php');
}

?>