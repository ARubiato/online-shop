<?php
require 'db-config.php';

if(isset($_POST['register-user'])) {

    $u_name = (isset($_POST['u_name'])) ? $_POST['u_name'] : "";
    $u_pwd = (isset($_POST['u_pwd'])) ? $_POST['u_pwd'] : "";
    $cu_pwd = (isset($_POST['cu_pwd'])) ? $_POST['cu_pwd'] : "";

    if($u_pwd!=$cu_pwd) {
        
    } else {
        echo "password matches!";
    }


}

?>