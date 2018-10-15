<?php 
require 'bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <nav class = "navbar navbar-expand-lg navbar-light bg-light">
        <a class = "navbar-brand" href = "index.php">Some Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class = "collapse navbar-collapse">
            <ul class = "navbar-nav mr-auto">
                <li class = "nav-item">
                    <a class = "nav-link" href = "index.php">Home</a>
                </li>
                <li class = "nav-item">
                <a class = "nav-link" href = "view-products.php">View Products</a>
                </li>
            </ul>

            <form class = "form-inline my-2 my-lg-0">
                    <input class = "form-control mr-sm-2" type = "search" placeholder = "Search">
                    <button class = "btn btn-outline-success my-2 my-sm-0"><i class="fas fa-search"></i></button>
           </form>
           <ul class = "navbar-nav">
            <li class = "nav-item dropdown">
                <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = button data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                    Settings
                </a>
                <div class = "dropdown-menu dropdown-menu-right" aria-labelledby = "navbarDropdown">
                    <a class = "dropdown-item">Signed in as</a>
                    <a class = "dropdown-item" href = "view-profile.php">View profile</a>
                    <div class = "dropdown-divider"></div>
                    <a class = "dropdown-item btn btn-outline-danger">Sign out</a>
                </div>
            </li>
           </ul>
         </div>
    </nav>
</body>
</html>