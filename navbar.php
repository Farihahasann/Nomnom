<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

  <header>
    <div class="nav-bar">
      <a href="" class="logo">NomNom</a>
      <div class="navigation">
        <div class="nav-items">
          <i class="uil uil-times nav-close-btn"></i>
          <a href="index.php"><i class="uil uil-home"></i> Home</a>
         
          <a href="menu.php"><i class="uil uil-info-circle"></i>Menu </a>
          <a href="img.php"><i class="uil uil-document-layout-left"></i> Gallery</a>
          <a href="contact.php"><i class="uil uil-envelope"></i> Contact Us</a>
          <a href="review.php"><i class="uil uil-envelope"></i> Review</a>
         <a href="orders.php"><i class="uil uil-envelope"></i> orders</a>

          <a href="cart.php"><i class="uil uil-shopping-bag"></i>Cart</a>
          <a href="login.php"><i class="uil uil-user-check"></i>Account</a>


         
        </div>
      </div>
      <i class="uil uil-apps nav-menu-btn"></i>
    </div>
    <div class="scroll-indicator-container">
      <div class="scroll-indicator-bar"></div>
    </div>
  </header>
  <script>
    //Javacript for the scroll indicator bar
    window.addEventListener("scroll", () => {
      const indicatorBar = document.querySelector(".scroll-indicator-bar");

      const pageScroll = document.body.scrollTop || document.documentElement.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrollValue = (pageScroll / height) * 100;

      indicatorBar.style.width = scrollValue + "%";
    });

    //Responsive navigation menu toggle
    const menuBtn = document.querySelector(".nav-menu-btn");
    const closeBtn = document.querySelector(".nav-close-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      navigation.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      navigation.classList.remove("active");
    });
  </script>

</body>
</html>
      