<?php
require 'db-config.php';

if(isset($_POST['register-user'])) {

    $u_name = (isset($_POST['u_name'])) ? $_POST['u_name'] : "";
    $u_pwd = (isset($_POST['u_pwd'])) ? $_POST['u_pwd'] : "";
    
    $hash_pwd =password_hash($u_pwd,PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO user-cred (u_name,u_pwd) VALUE ('$u_name',$u_pwd");

    


}

?>