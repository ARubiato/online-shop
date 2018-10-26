<?php
require 'db-config.php';
require 'session.php';

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
            Echo "Account does not exist or password does not match";
        }

    } else {
        Echo "login failed";
    }

}


if(isset($_POST['create-shop'])) {

    $us_sn = isset($_POST['us_sn']) ? $_POST['us_sn'] : "";
    $us_fn = isset($_POST['us_fn']) ? $_POST['us_fn'] : "";
    $us_address = isset($_POST['us_address']) ? $_POST['us_address'] : "";
    $us_email = isset($_POST['us_email']) ? $_POST['us_email'] : "";
    echo $us_fn;
    $sql = "INSERT INTO `user-shop` (u_id,us_fn,us_sn,us_address,us_email) VALUES ('$u_id','$us_fn','$us_sn','$us_address','$us_email')";
    mysqli_query($conn,$sql);
    
    header('location:../index.php');
    
}

?>