<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>About</title>

  <!-- aos library css  -->

  <link rel="stylesheet" href="about.css">
</head>

<body>
<?php include'navbar.php';?>
</br>
</br>
  <section id="ourGoals" data-aos="fade-down">
    <div class="container">
      <div class="ourGoals__info">
        <h3 class="ourGoals__title">
          Our Goals
        </h3>
        <p class="ourGoals__text">
          We shall sell delicious and remarkable food and beverages that meet the highest quality, freshness, and
          seasonality criteria while combining modern-creative and classic cooking traditions. By showcasing warmth,
          graciousness, efficiency, skill, professionalism, and integrity in our work, we will continually serve our
          consumers with exceptional service. To have every customer who comes through our doors leave impressed by
          their experience at Shaif's Cuisine and excited to come back again.
        </p>
      </div>
      <div class="ourGoals__imgs__wrapper" data-aos="fade-up">
        <div class="ourGoals__img1">
          <img src="./imagess/ourGoals_img1.png" alt="kitchen img">
        </div>
        <div class="ourGoals__img2">
          <img src="./imagess/ourGoals_img2.png" alt="kitchen img">
        </div>
        <div class="ourGoals__img3">
          <img src="./imagess/ourGoals_img3.png" alt="kitchen img">
        </div>
      </div>
    </div>
  </section>
  <div class="container1">
     
    <div class="main-video-container">
       <video src="img/vid-1.mp4" loop controls class="main-video"></video>
       <h3 class="main-vid-title">preparing dishes</h3>
    </div>
 
    <div class="video-list-container">

       <div class="list active">
          <video src="img/vid-1.mp4" class="list-video"></video>
          <h3 class="list-title">preparing dishes</h3>
       </div>
       <div class="list active">
          <video src="img/vid-2.mp4" class="list-video"></video>
          <h3 class="list-title">packing them with proper precautions</h3>
       </div>
 
       <div class="list">
          <video src="img/vid-3.mp4" class="list-video"></video>
          <h3 class="list-title">ensuring taste with hygiene</h3>
       </div>
 
       <div class="list">
          <video src="img/vid-4.mp4" class="list-video"></video>
          <h3 class="list-title">ensuring taste with health</h3>
       </div>
 
       <div class="list">
          <video src="img/vid-5.mp4" class="list-video"></video>
          <h3 class="list-title">good food</h3>
       </div>
 
       
 
    </div>
 
 </div>
  <!-- End Our Goals -->
  <!-- aos scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom scripts -->
  <script src="./main.js"></script>
  <script src="video.js"></script>
</body>

</html>