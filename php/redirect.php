<?php
require 'db-config.php';
require 'session.php';

if(isset($_POST['redirect-create']) and !isset($_SESSION['u_name']) or !isset($_SESSION['u_id'])) {
header('location:../register-user.php');
}
if(isset($_POST['redirect-login']) and isset($_SESSION['u_name']) or isset($_SESSION['u_id'])){
    header('location: ../index.php');
} else {
    header('location:../login-user.php');
}

if(isset($_POST['create-shop'])){
    header('location: ../shop-create.php');

}

?>