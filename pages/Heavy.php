<?php

include('connection.php');
$querry = 'select * from feats where ID = 3';
$result = mysqli_query($con, $querry);
if($result && mysqli_num_rows($result) > 0)
{
    $data = mysqli_fetch_assoc($result);
}
else
{
  echo('no data found');
  die;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>replit</title>
    <link href="infopage.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <header class = "header"> 
      <a> 
      <img src = "logo.png" class = "img-header">
      </a>
      <nav class = "navigation">
        <a href = "choicepage.html", class = "text_header">Home</a>
        <a href = "#", class = "text_header">Contacts</a>
        <button class = "btnLogin-popup">login</button>
      </nav>
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
    <h1 class = "Header-text"><?php echo $data['Title'];?></h1>
    <?php echo $data['Effect'];?>
    <footer class = "footer_down">
        <img src = "mail.png" class = "mailimage">
        <p class = "mailtext">VladlensPodnebess@gmail.lv</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src = "login-register.js"></script>
    </body>
</html>