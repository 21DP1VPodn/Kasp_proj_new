<!DOCTYPE html>
<?php 
session_start();

include("connection.php");
include("functions.php");
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="http://localhost/login/Kasp_proj_new/styles/style-choice.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header class = "header"> 
    <a class = "image"> 
    <img src = "http://localhost/login/Kasp_proj_new/images/logo.png" class = "img-header">
    </a>
    <?php if(isset($_SESSION['user_id']) == false) : ?>
    <nav class = "navigation">
      <a href = "choicepage.html", class = "text_header">Home</a>
      <a href = "statistics.php", class = "text_header">Statistics</a>
      <a>
      <button class = "btnLogin-popup">login</button>
      </a>
    </nav>
    <?php else: ?>

      <?php
      $id = $_SESSION['user_id'];
      $querry = "select * from users where user_id = $id";
      $result = mysqli_query($con, $querry);
      if($result && mysqli_num_rows($result) > 0)
      {
          $user_data = mysqli_fetch_assoc($result);
      }
      else
      {
        echo('no data found');
        die;
      }
      ?>
      <nav class = "navigation">
      <a href = "choicepage.php", class = "text_header">Home</a>
      <a href = "statistics.php", class = "text_header">Statistics</a>
      <!--Admin menu-->
      <?php if($user_data['admin?'] == 1): ?>
        <a href = "admin.php?type=basic", class = "text_header">Admin</a>
      <?php endif; ?>
      <a href = "profile.php">
      <button class = "btnProfile">Profile</button>
      </a>
      </div>
      </nav>
    <?php endif; ?>
    <div class = 'menu-div'>
    <button class = 'menu'>
      <span>
      <ion-icon name="menu"></ion-icon>
      </span>
    </button>
    <ul class = 'menu-content'>
    <?php if(isset($_SESSION['user_id']) == false) : ?>
        <li><a href = 'choicepage.php' class = 'menu-line'>Home</a></li>
        <li><a href = 'statistics.php' class = 'menu-line'>Statistics</a></li>
        <li><button class = 'btnLogin-popup' onclick= "show()">Login</button></li>
        <?php else : ?>
        <?php
      $id = $_SESSION['user_id'];
      $querry = "select * from users where user_id = $id";
      $result = mysqli_query($con, $querry);
      if($result && mysqli_num_rows($result) > 0)
      {
          $user_data = mysqli_fetch_assoc($result);
      }
      else
      {
        echo('no data found');
        die;
      }
      ?>
      <li><a href = "choicepage.php", class = "menu-line">Home</a></li>
      <li><a href = "statistics.php", class = "menu-line">Statistics</a></li>
      <?php if($user_data['admin?'] == 1): ?>
        <li><a href = "admin.php?type=basic", class = "menu-line">Admin</a></li>
      <?php endif; ?>
      <li><a href = "profile.php">
        <button class = "btnProfile">Profile</button>
      </a></li>
    <?php endif; ?>
    </l>
      </ul>
  </header>

  <div class="wrapper">
    <span class = "icon-close">
      <ion-icon name="close"></ion-icon>
    </span>
    <div class="form-box login">
      <h2>Login</h2>
      <form method = "post" action = "login.php">
        <div class="input-box">
          <span class="icon">
            <ion-icon name="person"></ion-icon>
          </span>
          <input type="text" name = 'User_name_login' required>
          <label>Username</label>
        </div>
        <div class="input-box">
          <span class="icon">
            <ion-icon name="lock-closed"></ion-icon>
          </span>
          <input type="password" name='Password_login' required>
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">remember me</label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="Login-register">
          <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
        </div>
      </form>
    </div>
    <div class="form-box register">
      <h2>Registration</h2>
      <form method="post" action = "
      signup.php">
        <div class="input-box">
          <span class="icon">
            <ion-icon name="people"></ion-icon>
          </span>
          <input type="text" name = "Name" required>
          <label>Name</label>
        </div>
        <div class="input-box">
          <span class="icon">
            <ion-icon name="mail"></ion-icon>
          </span>
          <input type="email" name = "Mail" required>
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="icon">
            <ion-icon name="person"></ion-icon>
          </span>
          <input type="text" name = "User_name" required>
          <label>Username</label>
        </div>
        <div class="input-box">
          <span class="icon">
            <ion-icon name="lock-closed"></ion-icon>
          </span>
          <input type="password" name = "Password" required>
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">I want to recieve news about the site</label>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="Login-register">
          <p>Already have an account?<a href="#" class="login-link">Login</a></p>
        </div>
      </form>
    </div>
  </div>
  <a id="container1", style="pointer-events: auto;", href = "subs.php">
  <div class = "container", id = "container",style = "pointer-events: auto;">
  <button class = "button-classes">
    <p class = "text">subclasses</p>
    <p class = "text-hidden"> <br>choose your role in this world</p>
  </button>
  </div>
  </a>
  <a id="container2", style="pointer-events: auto;", href = "Races.php">
  <div class = "container">
  <button class = "button-races">
    <p class = "text">races</p>
    <p class = "text-hidden"> <br>Choose your nationality in this world</p>
  </button>
  </div>
  </a>
  <a id="container3", style="pointer-events: auto;", href = "Feats.php">
  <div class = "container">
  <button class = "button-feats">
    <p class = "text">feats</p>
    <p class = "text-hidden"> <br>for all your awesome combos</p>
  </button>
  </div>
  </a>
  <a id="container4", style="pointer-events: auto;", href = "Backstories.php">
  <div class = "container">
  <button class = "button-backgrounds">
    <p class = "text">backstories</p>
    <p class = "text-hidden"> <br>who were you before the adventure?</p>
  </button>
  </div>
  </a>
  <a id="container5", style="pointer-events: auto;", href = "dice.php">
  <div class = "container">
  <button class = "button-dice">
    <p class = "text"> dice</p>
    <p class = "text-hidden"> <br>roll the dice and test your luck</p>
  </button>
  </div>
  </a>
  <a id="container6", style="pointer-events: auto;", href = "https://dnd.wizards.com/products?category=tabletop-rpg">
  <div class = "container">
<button class = "button-books">
  <p class = "text">official books </p> 
  <p class = "text-hidden"> <br>buy official books for more content</p>
</button>
</div>
</a>
<footer class = "footer">
  <img src = "http://localhost/login/Kasp_proj_new/images/mail.png" class = "mailimage">
  <p class = "mailtext">VladlensPodnebess@gmail.lv</p>
</footer>

<script src = "http://localhost/login/Kasp_proj_new/functions/dropdown-controller.js"></script>
<script src = "http://localhost/login/Kasp_proj_new/functions/login-register.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>