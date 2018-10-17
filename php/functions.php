<?php
require 'db-config.php';

if(isset($_POST['register-user'])) {
$u_name = isset($_POST['u_name']) ? $_POST['u_name'] : "";
$u_pwd = isset ($_POST['u_pwd']) ? $_POST['u_pwd'] : "";
$hash_pwd = password_hash($u_pwd,PASSWORD_DEFAULT);
$sql = "INSERT INTO `user-cred` (u_name,u_pwd) VALUES ('$u_name','$hash_pwd')";
mysqli_query($conn,$sql);
header('location:../selection-page.php');

}

if(isset($_POST['login-user'])) {
    
session_start();

    if(isset($_POST['u_name']) and isset($_POST['u_pwd'])) {
        $u_name = $_POST['u_name'];
        $u_pwd = $_POST['u_pwd'];
    
        $sql = "SELECT * FROM `user-cred` WHERE u_name = '$u_name'";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($res);

        if(password_verify($u_pwd,$data['u_pwd'])) {
            $_SESSION['u_name'] = $u_name;
            $_SESSION['u_id'] = $u_id;
            header('location: ../index.php');

        } else {
            Echo "Password does not match";
        }

    } else {
        Echo "login failed";
    }

}

?>