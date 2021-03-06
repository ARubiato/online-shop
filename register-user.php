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
                <h4 class = "display-4" align = "center">Create an account</h4>
                <hr>
               </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" placeholder = "Username" name = "u_name" id = "u_name" required>
                </div>

                <div class=  "form-group">
                    <input type = "password" class = "form-control" placeholder = "Password" name = "u_pwd" id = "u_pwd" required>
                </div>

                <div class = "form-group">
                    <input type = "password" class = "form-control" placeholder = "Confirm password" id = "cu_pwd" required>
                </div>
            
                <div class = "form-group">
                    <button type = "submit" class = "btn btn-outline-dark btn-block" name = "register-user">Register</button>
                </div>

                <div class = "form-group">
                    <p>Already have an account? Login <a href = "login-user.php">here</a>!</p>
                </div>

            </div>
        </div>
    </form>
    </div>
</body>
</html>