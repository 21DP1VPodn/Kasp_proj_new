<!DOCTYPE html>
<?php 
session_start();

include("connection.php");
include("functions.php");
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="http://localhost/login/Kasp_proj_new/styles/dice.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header class = "header"> 
    <a class = "image"> 
    <img src = "http://localhost/login/Kasp_proj_new/images/logo.png" class = "img-header">
    </a>
    <?php if(isset($_SESSION['user_id']) == false) : ?>
    <nav class = "navigation">
      <a href = "choicepage.html", class = "text_header" id = 'underline-nl'>Home</a>
      <a href = "statistics.php", class = "text_header" id = 'underline-nl'>Statistics</a>
      <button class = "btnLogin-popup">login</button>
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
      <a href = "choicepage.php", class = "text_header" id = 'underline'>Home</a>
      <a href = "statistics.php", class = "text_header" id = 'underline'>Statistics</a>
      <!--Admin menu-->
      <?php if($user_data['admin?'] == 1): ?>
        <a href = "admin.php?type=basic", class = "text_header" id = 'underline'>Admin</a>
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
      <form method="post" action = "signup.php">
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
  <div class = 'containers'>
  <div class = "container-left"> 
    <div class = "container">
      <img src="http://localhost/login/Kasp_proj_new/dice/4_1.png" class = "img_d4" id = "d4">
    </div>
    <button onclick = "roll(0, 4)">roll d4</button>
  </div>

  <div class = "container-right">
    <div class = "container">
      <img src="http://localhost/login/Kasp_proj_new/dice/6_1.png" class = "img_d4" id = "d6">
    </div>
    <button onclick = "roll(1, 6)">roll d6</button>
  </div>

  <div class = "container-left2">
    <div class = "container">
      <img src="http://localhost/login/Kasp_proj_new/dice/8_1.png" class = "img_d4" id = "d8">
    </div>
    <button onclick = "roll(2, 8)">roll d8</button>
  </div>

  <div class = "container-right2">
    <div class = "container">
      <img src="http://localhost/login/Kasp_proj_new/dice/10_1.png" class = "img_d4" id = "d10">
    </div>
    <button onclick = "roll(3, 10)">roll d10</button>
  </div>

  <div class = "container-left3">
    <div class = "container">
      <img src="http://localhost/login/Kasp_proj_new/dice/12_1.png" class = "img_d4" id = "d12">
    </div> 
    <button onclick = "roll(4, 12)">roll d12</button>
  </div>

  <div class = "container-right3"> 
    <div class = "container">
      <img src="http://localhost/login/Kasp_proj_new/dice/20_1.png" class = "img_d4" id = "d20">
    </div>
    <button onclick = "roll(5, 20)">roll d20</button>
  </div>

  <div class = "container-mid"> 
    <div class = "container">
      <img src="http://localhost/login/Kasp_proj_new/dice/10_1.png" class = "img_d4" id = "d100">
    </div> 
    <button onclick = "roll(6, 100)">roll d100</button>
  </div>
  </div>
  <footer class = "footer">
    <img src = "http://localhost/login/Kasp_proj_new/images/mail.png" class = "mailimage">
    <p class = "mailtext">vladlenspodnebess@gmail.com</p>
  </footer>
  <script src = "http://localhost/login/Kasp_proj_new/dice/script.js"></script>
  <script src = "http://localhost/login/Kasp_proj_new/functions/dropdown-controller.js"></script>
  <script src = "http://localhost/login/Kasp_proj_new/functions/login-register.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>