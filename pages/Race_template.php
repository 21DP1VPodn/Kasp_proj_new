<?php

include('connection.php');
if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    echo('No page provided');
    die;
}
$querry = "select * from races where ID = $page";
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
          <form action="#">
            <div class="input-box">
              <span class="icon">
                <ion-icon name="person"></ion-icon>
              </span>
              <input type="text" required>
              <label>Username</label>
            </div>
            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
              </span>
              <input type="password" required>
              <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label><input type="checkbox">remember me</label>
              <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="login-register">
              <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
            </div>
          </form>
        </div>
        <div class="form-box register">
          <h2>Registration</h2>
          <form action="#">
            <div class="input-box">
              <span class="icon">
                <ion-icon name="people"></ion-icon>
              </span>
              <input type="text" required>
              <label>Name</label>
            </div>
            <div class="input-box">
              <span class="icon">
                <ion-icon name="mail"></ion-icon>
              </span>
              <input type="email" required>
              <label>Email</label>
            </div>
            <div class="input-box">
              <span class="icon">
                <ion-icon name="person"></ion-icon>
              </span>
              <input type="text" required>
              <label>Username</label>
            </div>
            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
              </span>
              <input type="password" required>
              <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label><input type="checkbox">I want to recieve news about the site</label>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="login-register">
              <p>Already have an account?<a href="#" class="login-link">Login</a></p>
            </div>
          </form>
        </div>
      </div>
      </div>
    <img src = "<?php echo $data['Image code'];?>" class = "subimage_race">
    <h1 class = "Header-text"><?php echo $data['Title'];?></h1>
    <h2 class = "Ability-text"> Vision</h2>
    <p>
      <?php echo $data['Vision'];?>
    </p>

    <h2 class = "Ability-text">Languages</h2>
    <p><?php echo $data['Languages'];?></p>

    <h2 class = "Ability-text"><?php echo $data['Ability header 1'];?></h2>
    <p>
    <?php echo $data['Ability text 1'];?>
    </p>

    <h2 class = "Ability-text"><?php echo $data['Ability header 2'];?></h2>
    <p>
    <?php echo $data['Ability header 2'];?>
    </p>

    <h2 class = "Ability-text">Characteristics</h2>
    <p><?php echo $data['Characteristics'];?></p>

    <h2 class = "Ability-text">Age</h2>
    <p><?php echo $data['Age'];?></p>

    <h2 class = "Ability-text">Alignment</h2>
    <p><?php echo $data['Alignment'];?></p>

    <h2 class = "Ability-text">Size</h2>
    <p><?php echo $data['Size'];?></p>

    <h2 class = "Ability-text">Speed</h2>
    <p><?php echo $data['Speed'];?></p>

    <h2 class = "Ability-text">Names</h2>
    <p><?php echo $data['Names'];?></p>

    <h2 class = "Ability-text">Description</h2>
    <p class = 'text-lower'>
    <?php echo $data['Description'];?>
    </p>
    <footer class = "footer_down">
        <img src = "mail.png" class = "mailimage">
        <p class = "mailtext">VladlensPodnebess@gmail.lv</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src = "login-register.js"></script>
</body>
</html>
