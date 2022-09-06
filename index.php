

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <title>Pizza</title>
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- OWN CSS -->
  <link rel="stylesheet" href="index.css">

  <link rel="stylesheet" href="responsive-style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
  <!-- header design -->
  
  
<?php include'navbar.php';?>


    
  <section id="home">
    <div class="container-fluid px-0 top-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <h1  class="animated slideInDown" style="animation-delay: 1s">Welcome to<br> our <span>Home</span> Restaurant</h1>
            <p class="animated fadeInUp d-none d-md-block" style="animation-delay: 1.5s">Home made foods one call away.</p>
           
          </div>
        </div>
      </div>
    </div>
  </section>


  
  <section id="about">
    <div class="about-section wrapper">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
            <div class="card border-0">
              <img src="images/img/img-1.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 col-md-12 text-sec">
            <h2>We pride ourselves on making real food from the best ingredients.</h2>
            <p>Food is the most important element of our life. So must have the habit of taking healthy foods. But now a days we are so busy in our lifes that we barely get time to eat.</p>
            <a href="about.php">
              <button class="main-btn mt-4">Learn More</button>
            </a> 
          </div>
        </div>
      </div>
      <div class="container food-type">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
            <h2>We make everything by hand with the best possible ingredients.</h2>
            <p>we came up with an idea of delivering fresh homemade foods. Again there are so many cooks in different houses who pleases their family with the magic of their hands but doesnot get the chance to utilize this talent on professional level. So why not give them the chance to cook food for people staying at home and also earn some money from it. That’s how we came up with the idea.</p>
           
            <a href="about.php">
              <button class="main-btn mt-4">Learn More</button>
            </a> 
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="card border-0">
              <img src="images/img/img-2.png" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section-4 gallery-->

  <section id="gallery">
    <div class="story-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class=""text-content>
              <h2>Food that's beautiful to look at seems to taste better than food that isn't.
              </h2>
              <p>These foods are made at home with daily fresh ingredients because we believe that health should be our first priority.</p>
              <a href="img.php">
                <button class="main-btn mt3">Gallery</button>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section-5 explore food--> 
  <!-- section-5 explore food--> 
  <section id="explore-food">
    <div class="explore-food wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="text-content text-center">
              <h2>Explore Our Foods</h2>
              <p>These foods are made at home with daily fresh ingredients because we believe that health should be our first priority.These foods are made at home with daily fresh ingredients because we believe that health should be our first priority.</p>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
            <div class="card border">
              
              <a href="menu.php">
                   <img src="images/img/card1.jpg" class="img-fluid">
          
                </a> 
            </div>

          </div>
          <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
            <div class="card border">
              <a href="menu.php">
                   <img src="img/card2.jpg" class="img-fluid">
          
                </a> 
             
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
            <div class="card border">
          
              <a href="menu.php">
                  <img src="images/img/img-5.jpg" class="img-fluid">
                </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section-5 testimonial--> 
  <section id="review">
    <div class="wrapper testimonial-section">
      <div class="container text-center">
        <div class="text-center pb-4">
          <h2>Testimonial</h2>
        </div>
        <div class="row">
          <div class="col-sm-12 col-lg-10 offset-lg-1">
            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="carousel-caption">
                    <img src="images/review/review-1.jpg">
                    <p>"Beautiful food and great service.All most no waithing at all"</p>
                    <h5>Johnthan Doe </h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img src="images/review/review-2.jpg">
                    <p>"IF you want to eat the best quality of dish,you have to come here "</p>
                    <h5>Maccy Doe </h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img src="images/review/review-1.jpg">
                    <p>"It has become my all time favourite and it never dissapoint me "</p>
                    <h5>Johnthan Doe </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



   <!-- section-6 parallox--> 
  <section id="book-food">
    <div class="book-food">
      <div class="container book-food-text">
        <div class="row text-center">
          <div class="col-lg-9 col-md-12">
            <h2>Fresh food leads to healthy life.</h2>
          </div>
          <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
            <button class="main-btn">Learn more</button>
          </div>
        </div>
      </div>
    </div>
  </section>
 
   <!-- section-7 newsletter--> 
  <section id="newsletter">
    <div class="newsletter wrapper">
      <div class="container">
        <div class="row">
          <div class="sol-sm-12">
            <div class="text-content text-center pb-4">
              <h2>Hurry up! Subscribe our newsletter and get 25% off</h2>
              <p>Limited time offer for this month. No credit card required.</p>
            </div>
            <form class="newsletter">
              <div class="row">
                <div class="col-md-8 col-12">
                  <input class="form-control" placeholder="Email Address here" name="email" type="email">
                </div>
                <div class="col-md-4 col-12">
                  <button class="main-btn" type="submit">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section-8 footer--> 
  <footer id="footer">
    <div class="footer pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center">
            <div class="footer-social pb-4 text-center">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-dribbble"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="logout.php">logout</a>
            </div>
          </div>
         
          <div class="col-sm-12">
            <div class="footer-copy">
              <div class="copy-right text-center pt-5">
                <p class="text-light">© 2021. NomNom. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
  </script> 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
  </script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
  </script>
  <!-- own js -->
  <script src="main.js"></script>
</body>

</html>

