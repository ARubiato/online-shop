<?php
require 'db-config.php';

if(isset($_POST['redirect-create'])){
    header('location:../user-create-form.php');
}

?>