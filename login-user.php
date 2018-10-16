<?php
require 'includes/bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class = "container-fluid">
        <div class = "card col-lg-4 mt-10 mx-auto">
        <form method = "post" action = "php/functions.php">
            <div class = "card-body">
                <div class = "form-group">
                <h4 class = "display-4" align = "center">Login</h4>
                </div>   

                    <div class = "form-group">
                        <input type = "text" class = "form-control" placeholder = "Username" name = "u_name" required>
                    </div>

                    <div class = "form-group">
                        <input type = "password" class = "form-control" placeholder = "Password" name = "u_pwd" required>
                    </div>

                    <div class = "form-group">
                        <button class = "btn btn-outline-dark btn-block" name = "login-user">Login</button>
                    </div>

                    <div class = "form-group">
                        <p>Don't have an account? Create one <a href = "register-user.php">here</a>!</p>
                    </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>