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
$querry = "select * from backstories as b
inner join attachments as a on a.BackstoryID = b.ID
inner join flaws as f on f.BackstoryID = b.ID
inner join ideals as i on i.BackstoryID = b.ID
inner join options as o on o.Backstory_ID = b.ID
inner join traits as t on t.Backstory_ID = b.ID 
where b.ID = $page";
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
    <p><b>Skill proficiencies: </b><?php echo $data['Skills'];?></p>
    <p><b>Tool proficiencies: </b> <?php echo $data['Tools'];?></p>
    <p><b>Languages:</b> <?php echo $data['Languages'];?></p>
    <p><b>Equipment:</b> <?php echo $data['Equipment'];?></p>
    <p><b>Starting capital: </b> <?php echo $data['Start money'];?></p>
    <br><br>
    <h2 class = "Ability-text">Description</h2>
    <i>
        <?php echo $data['Description'];?> 
    </i>
    <h2 class = "Ability-text"><?php echo $data['Option title'];?></h2>
    <i><?php echo $data['Option description'];?></i>
    <table>
        <tr>
            <th>d10</th>
            <th><?php echo $data['Table title'];?></th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $data['Option 1'];?></td>
        </tr>  
        <tr>
            <td>2</td>
            <td><?php echo $data['Option 2'];?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $data['Option 3'];?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $data['Option 4'];?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo $data['Option 5'];?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?php echo $data['Option 6'];?>r</td>
        </tr>
        <tr>
            <td>7</td>
            <td><?php echo $data['Option 7'];?></td>
        </tr>
        <tr>
            <td>8</td>
            <td><?php echo $data['Option 8'];?></td>
        </tr>
        <tr>
            <td>9</td>
            <td><?php echo $data['Option 9'];?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?php echo $data['Option 10'];?></td>
        </tr>           
    </table>
    <h2 class = "Ability-text"><?php echo $data['Ability title'];?></h2>
    <p>
        <?php echo $data['Ability'];?>
    </p>
    <h2 class = "Ability-text">Personalization</h2>
    <p>Now personalaize your character for a finishing touch, throw a corresponding dice or choose one for each table</p>
    <table>
        <tr>
            <th>d8</th>
            <th>trait</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $data['Trait 1'];?></td>
        </tr> 
        <tr>
            <td>2</td>
            <td><?php echo $data['Trait 2'];?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $data['Trait 3'];?></td>
        </tr>  
        <tr>
            <td>4</td>
            <td><?php echo $data['Trait 4'];?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo $data['Trait 5'];?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?php echo $data['Trait 6'];?></td>
        </tr>
        <tr>
            <td>7</td>
            <td><?php echo $data['Trait 7'];?></td>
        </tr>
        <tr>
            <td>8</td>
            <td><?php echo $data['Trait 8'];?></td>
        </tr>
    </table>
    <br>
    <table class = "table-right">
        <tr>
            <th>d6</th>
            <th>Ideal</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $data['Ideal 1'];?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $data['Ideal 2'];?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $data['Ideal 3'];?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $data['Ideal 4'];?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo $data['Ideal 5'];?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?php echo $data['Ideal 6'];?></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>d6</th>
            <th>Attachment</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $data['Attachment 1'];?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $data['Attachment 2'];?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $data['Attachment 3'];?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $data['Attachment 4'];?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo $data['Attachment 5'];?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?php echo $data['Attachment 6'];?></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>d6</th>
            <th>Flaw</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $data['Flaw 1'];?></td>
        </tr> 
        <tr>
            <td>2</td>
            <td><?php echo $data['Flaw 2'];?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $data['Flaw 3'];?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $data['Flaw 4'];?></td>
        </tr> 
        <tr>
            <td>5</td>
            <td><?php echo $data['Flaw 5'];?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?php echo $data['Flaw 6'];?></td>
        </tr>  
    </table>
    <br><br><br><br>
    <footer class = "footer_down">
        <img src = "mail.png" class = "mailimage">
        <p class = "mailtext">VladlensPodnebess@gmail.lv</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src = "login-register.js"></script>
</body>
</html>