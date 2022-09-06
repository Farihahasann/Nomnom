<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>css grid</title>

    
    <link rel="stylesheet" href="pic.css">
    <link rel="stylesheet" href="lightbox.css" type="text/css">


</head>

<body>

 <?php include'navbar.php';?>
</br>

</br>

</br>

    <div class="container">

       <?php

        $conn = mysqli_connect('localhost','root','','nomnom');

        $query  = "SELECT * FROM images";

        $run = mysqli_query($conn,$query);

        

        if(mysqli_num_rows($run) > 0){

            while($row = mysqli_fetch_array($run)){

                $image = $row['image'];

                $name = $row['name'];

                ?>

                

        <div class="gallery-container">

            <div class="image">

               <a href="uploaded_img/<?php echo $image;?>" data-lightbox="image-1">

                <img src="uploaded_img/<?php echo $image;?>" data-lightbox="image-1">

                </a>

            </div>

            <div class="text">

                <h5><?php echo $name?></h5>

            </div>

        </div>

              <?php

            }

        }

        

        ?>

    </div>

    <script src="lightbox-plus-jquery.js"></script>
</body>

</html>

