<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/dash.css">
     
  
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>
<body>
    <?php include '../components/admin_header.php' ?>
    <section class="dashboard">
        <div class="top">
            
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-comments"></i>
                         <?php
         $select_products = $conn->prepare("SELECT * FROM `products`");
         $select_products->execute();
         $numbers_of_products = $select_products->rowCount();
      ?>
                        <span class="text">Products</span>
                        <span class="number"><?= $numbers_of_products; ?></span>
                        <a href="products.php" class="btn">see products</a>
                    </div>


                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <?php
         $total_pendings = 0;
         $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
         $select_pendings->execute(['pending']);
         while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
            $total_pendings += $fetch_pendings['total_price'];
         }
      ?>
                        <span class="text">Total pending</span>
                        <span class="number"><?= $total_pendings; ?></span>
                         <a href="placed_orders.php" class="btn">see orders</a>
                    </div>


                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <?php
         $total_completes = 0;
         $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
         $select_completes->execute(['completed']);
         while($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)){
            $total_completes += $fetch_completes['total_price'];
         }
      ?>
                        <span class="text">Total Complete</span>
                        <span class="number"><?= $total_completes; ?></span>
                        <a href="placed_orders.php" class="btn">see orders</a>
                    </div>

                 
                    <div class="box box4">
                        <i class="uil uil-thumbs-up"></i>
                        <?php
         $select_orders = $conn->prepare("SELECT * FROM `orders`");
         $select_orders->execute();
         $numbers_of_orders = $select_orders->rowCount();
      ?>>
                        <span class="text">Total orders</span>
                        <span class="number"><?= $numbers_of_orders; ?></span>
                        <a href="placed_orders.php" class="btn">see orders</a>
                    </div>


                    <div class="box box5">
                        <i class="uil uil-thumbs-up"></i>
                         <?php
         $select_users = $conn->prepare("SELECT * FROM `user`");
         $select_users->execute();
         $numbers_of_users = $select_users->rowCount();
      ?>
                        <span class="text">Users</span>
                        <span class="number"><?= $numbers_of_users; ?></span>
                        <a href="users_accounts.php" class="btn">see users</a>

                    </div>


                    <div class="box box6">
                        <i class="uil uil-thumbs-up"></i>
                         <?php
         $select_admins = $conn->prepare("SELECT * FROM `admin`");
         $select_admins->execute();
         $numbers_of_admins = $select_admins->rowCount();
      ?>
                        <span class="text">Admin</span>
                        <span class="number"><?= $numbers_of_admins; ?></span>
                        <a href="admin_accounts.php" class="btn">see admins</a>
                    </div>

                    <div class="box box7">
                        <i class="uil uil-thumbs-up"></i>
                        <?php
         $select_messages = $conn->prepare("SELECT * FROM `messages`");
         $select_messages->execute();
         $numbers_of_messages = $select_messages->rowCount();
      ?>
                        <span class="text">Masseges</span>
                        <span class="number"><?= $numbers_of_messages; ?></span>
                        <a href="messages.php" class="btn">see messages</a>
    
                    </div>

                    <div class="box box9">

                        <i class="uil uil-thumbs-up"></i>
                        <?php
         $select_images = $conn->prepare("SELECT * FROM `images`");
         $select_images->execute();
         $numbers_of_images = $select_images->rowCount();
      ?>
                        <span class="text">Gallary</span>
                        <span class="number"><?= $numbers_of_images; ?></span>
                         <a href="images.php" class="btn">see images</a>
                     </div> 

                    </div>
                   
                </div>
            

            
        
    </section>

    
</body>
</html>


















