<?php
require 'includes/header.php';
require 'php/session.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create your own shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class = "container-fluid">
        <div class = "card">
        <div class = "card-header">
            <h4 class = "display-4" align = "center">Create your own shop</h4>
        </div>
        <div class = "row">
            <div class = "card-body col-lg-6 mt-5">
            <form method = "post" action = "php/functions.php">
                  <div class = "input-group mb-3">
                    <legend>Shop name</legend> 
                    <input type = "text" class = "form-control" name = "us_sn" placeholder = "Owner's shop" required>
                </div>
                <div class = "input-group mb-3">
                    <legend>Shop owner's name</legend>
                    <input type = "text" class = "form-control" name = "us_fn" placeholder = "Fullname" required>
                </div>
                <div class = "input-group mb-3">
                    <legend>Shop address</legend>
                    <input type = "text" class = "form-control" name = "us_address" placeholder = "Street" required>
                </div>
                <div class = "input-group mb-3">
                    <legend>Email</legend>
                    <input type = "text" class = "form-control" name = "us_email" placeholder = "Email" required>
                </div>
            </div>
       
            <div class = "card-body col-lg-6 mt-5">
                <div class = "form-group">
                <p>Choose an image file of your shop/logo</p>
                    <!-- <input type = "file" name = "us_file_up"> -->
                </div>
            </div>


        </div>
        
        <div class = "form-group mx-auto">
        <button class = "btn btn-outline-dark btn-lg" type = "submit" name = "create-shop">Create</button>
        </div>

        </form>
        </div>
    </div>
</body>
</html>