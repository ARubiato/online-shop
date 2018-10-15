<?php
require 'includes/bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Select</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class = "custom-body">
    <div class = "container-fluid">
        <div class = "card mt-10 mr-10 ml-10">
            <div class = "card-body">
            
                <form method = "post" action = "php/redirect.php">
                <div class = "row">

                    <div class = "col">
                        <div class = "form-group ml-10">
                        <h4 class = "display-4" align = "center">Want to create an online shop for your store?</h4>
                        </div>
                    </div>
                    
                    <div class = "col">
                        <div class = "form-group mt-2 ml-10">
                            <h4 class = "display-4">Take action</h4>
                        </div>
                        <div class = "form-group ml-10">
                        <button class = "btn btn-outline-dark btn-lg" type = "submit" name = "redirect-create">Create account</button>
                        <button class = "btn btn-outline-dark btn-lg" type = "submit">Login</button>
                        </div>
                    </div>
            
                </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>