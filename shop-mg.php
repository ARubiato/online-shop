
<?php
require 'includes/header.php';
require 'php/session.php'
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage your shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class = "container-fluid">
     <div class = "card mt-10 mr-10 ml-10">
            <div class = "card-body">
            <div class = "form-group">
            <?php 
            $sql = "SELECT u_id FROM `user-shop` WHERE u_id = '$u_id'";
            $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);

            if($count == 0) 
            {
            ?>
                <p class = "display-4" align = "center">You don't have a shop running yet!</p>
            </div>
            
            <form method = "post" action = "php/redirect.php">
            <div class = "form-group mt-5 col-md-12 text-center">
                <button class = "btn btn-outline-dark" name = "create-shop">Create Shop</button>
                </form>
            
            <?php } else { ?>
            <?php 
                $sql1 = "SELECT * FROM `user-shop` WHERE u_id = '$u_id'";
                $res = mysqli_query($conn,$sql1);
                $data = mysqli_fetch_array($res)
            ?>
                <form method = "post" action = "#">
                    <h5>Store Owner : <?php echo $data['us_fn'];?></h5>
                    <h5>Store Name : <?php echo $data['us_sn'];?></h5>
                    <h5>Address : <?php echo $data['us_address'];?></h5>
                    <h5>Email : <?php echo $data['us_email'];?></h4>
                </form>

            <?php }?>
      
            </div>
                <div class = "form-group">
                <button class = "btn btn-outline-dark" name = "manage-del">Manage Deliveries</button>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>