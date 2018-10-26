<?php
require 'includes/header.php';
require 'php/session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
</head>
<body>
    <div class = "container-fluid">
        <div class = "card col-lg-8 mx-auto">
            <div class = "card-body">
            <?php 
                    $sql = "SELECT * FROM `user-shop`";
                    $res = mysqli_query($conn,$sql);
                    ?>
                    <?php while($data = mysqli_fetch_array($res)) {?>
                    <div class = "panel panel-default">
                    <div class = "panel-body">
                    <h4><?php echo $data['us_fn'];?></h4>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>