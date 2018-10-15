<?php
require 'includes/bootstrap.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create an account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class = "container-fluid">
    <form method = "post" action = "php/functions.php" onsubmit="return confirmPass()">
         <div class = "card col-lg-4 mt-10 mx-auto"> 
            <div class = "card-body">
               <div class = "form-group">
                <h4 class = "display-4">Enter your information</h4>
                <hr>
               </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" placeholder = "Username" name = "u_name" id = "u_name">
                </div>

                <div class=  "form-group">
                    <input type = "password" class = "form-control" placeholder = "Password" name = "u_pwd" id = "u_pwd">
                </div>

                <div class = "form-group">
                    <input type = "password" class = "form-control" placeholder = "Confirm password" name = "cu_pwd" id = "cu_pwd">
                </div>
                
                <div class = "form-group">
                    <button type = "submit" class = "btn btn-outline-dark btn-block" name = "register-user">Register</button>
                </div>
            
            </div>
        </div>
    </form>
    </div>
</body>
</html>