<?php
require 'db-config.php';

if(isset($_POST['redirect-create'])){
    header('location:../register-user.php');
}

if(isset($_POST['redirect-login'])){
    header('location:../login-user.php');
}

?>