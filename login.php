<?

if(isset($_SESSION['user_id'])){
    header('location:dashboard.php');
}
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
    <title></title>
  </head>
  <body>
  
  
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="validation.php" id="form" method="post" class="sign-in-form" >
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"  required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" value="Password" oninput="this.value = this.value.replace(/\s/g, '')" required />
            </div>
            <input type="submit" value="Login"  name="submit" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              
            </div>
          </form>
          <form action="registration.php" id="form" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" id="email" name="email" onkeydown="validation()" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"  name="password" oninput="this.value = this.value.replace(/\s/g, '')" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="CPassword"  name="cpass" oninput="this.value = this.value.replace(/\s/g, '')"    required />
            </div>
             
             
            <input type="submit" class="btn" value="Sign up" name="submit"/>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Welcome.Thank ypu for joining us.Hope you will have a wonderful journey with us.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Welcome back.Hope we can again fulfill all your expections
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login.js"></script>
    <script type="text/javascript">
       function validation()
 {
  var form=document.getElementById("form");
  var email=document.getElementById("email").value;
  var text=document.getElementById("text");
  var pattern =/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  if(email.match(pattern)){
    form.classList.add("valid");
    form.classList.remove("invalid");
    text.innerHTML="valid"
    text.style.color="#00ff00";
  
  }else{
     form.classList.remove("valid");
    form.classList.add("invalid");
    text.innerHTML="invalid"
    text.style.color="#00ff00";
  }


 }
    </script>
  </body>
</html>
