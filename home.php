<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<html>
    <head>
        <title></title>
    </head>
    <body>

    <a href="logout.php"> logout </a>
        <h1 align='center'>Welcome to Cart Section <?php echo $_SESSION['username']; ?> </h1>
    </body>
    </html>
