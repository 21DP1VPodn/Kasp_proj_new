<!DOCTYPE html>
<?php 
session_start();

include("connection.php");
include("functions.php");

if (isset($_GET['type']))
{
    $type = $_GET['type'];
}
else
{
    header('Location: choicepage.php');
    die;
}

if (isset($_SESSION['user_id']))
{
  $user_data = check_login($con);
  if ($user_data['admin?'] == 0)
  {
    header('Location: choicepage.php');
    die;
  }
}
else
{
  header('Location: choicepage.php');
  die;
}
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="http://localhost/login/Kasp_proj_new/styles/admin.css" rel="stylesheet" type="text/css" />
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

    <?php if($type == 'basic'):?>
    <a href = 'admin.php?type=users'>
      <button class = 'btn-1'>Users</button>
    </a>
    <a href = 'admin.php?type=records'>
      <button class = btn-2>Records</button>
    </a>
    <a href = 'admin.php?type=comments'> 
      <button class = 'btn-3'>Comments</button>
    </a> 
    <?php endif;?>
    <?php if($type == 'users') : ?>
    <?php 
        $query = 'select * from users';
        $users_data = mysqli_query($con, $query);
    ?>
    <table class = 'admin-table'>
      <tr>
        <th id = 'user_id'>user id</th>
        <th>users name</th>
        <th>username</th>
        <th>email</th>
        <th id = description>user description</th>
      </tr>
    <?php for($i = 0; $i <= mysqli_num_rows($users_data); $i++): ?>
      <?php 
      $query = "select * from users where ID = '$i' limit 1";
      $result = mysqli_query($con, $query);
      ?>  
      <?php if($result && mysqli_num_rows($result) > 0): ?>
        <?php $user_data = mysqli_fetch_assoc($result);?>
      <tr>
          <td id = 'user_id'><?php echo($user_data['user_id']); ?></td>
          <td><?php echo($user_data['Name']); ?></td>
          <td><?php echo($user_data['username']); ?></td>
          <td><?php echo($user_data['Email']); ?></td>
          <td id = 'description'><?php echo($user_data['Description']); ?></td>
      </tr>
      <?php endif;?>
    <?php endfor; ?>
    </table>
<?php endif; ?>
<?php if($type == 'records') : ?>
  <?php 
        $query = 'select * from subclases';
        $users_data = mysqli_query($con, $query);
    ?>
    <table class = 'admin-table-records'>
      <tr>
        <th>ID</th>
        <th>type</th>
        <th>Name</th>
      </tr>
    <?php for($i = 0; $i <= mysqli_num_rows($users_data); $i++): ?>
      <?php 
      $query = "select * from subclases where ID = '$i' limit 1";
      $result = mysqli_query($con, $query);
      ?>  
      <?php if($result && mysqli_num_rows($result) > 0): ?>
        <?php $user_data = mysqli_fetch_assoc($result);?>
      <tr class = 'subclass'>
          <td><?php echo($user_data['ID']); ?></td>
          <td>Subclass</td>
          <td><?php echo($user_data['Main Title']); ?></td>
      </tr>
      <?php endif;?>
    <?php endfor; ?>
    <?php 
        $query = 'select * from races';
        $users_data = mysqli_query($con, $query);
    ?>
        <?php for($i = 0; $i <= mysqli_num_rows($users_data); $i++): ?>
      <?php 
      $query = "select * from races where ID = '$i' limit 1";
      $result = mysqli_query($con, $query);
      ?>  
      <?php if($result && mysqli_num_rows($result) > 0): ?>
        <?php $user_data = mysqli_fetch_assoc($result);?>
      <tr class = 'race'>
          <td><?php echo($user_data['ID']); ?></td>
          <td>Race</td>
          <td><?php echo($user_data['Title']); ?></td>
      </tr>
      <?php endif;?>
    <?php endfor; ?>
    <?php 
        $query = 'select * from feats';
        $users_data = mysqli_query($con, $query);
    ?>
        <?php for($i = 0; $i <= mysqli_num_rows($users_data); $i++): ?>
      <?php 
      $query = "select * from feats where ID = '$i' limit 1";
      $result = mysqli_query($con, $query);
      ?>  
      <?php if($result && mysqli_num_rows($result) > 0): ?>
        <?php $user_data = mysqli_fetch_assoc($result);?>
      <tr class = 'feat'>
          <td><?php echo($user_data['ID']); ?></td>
          <td>Feat</td>
          <td><?php echo($user_data['Title']); ?></td>
      </tr>
      <?php endif;?>
    <?php endfor; ?>
    <?php 
        $query = 'select * from backstories';
        $users_data = mysqli_query($con, $query);
    ?>
        <?php for($i = 0; $i <= mysqli_num_rows($users_data); $i++): ?>
      <?php 
      $query = "select * from backstories where ID = '$i' limit 1";
      $result = mysqli_query($con, $query);
      ?>  
      <?php if($result && mysqli_num_rows($result) > 0): ?>
        <?php $user_data = mysqli_fetch_assoc($result);?>
      <tr class = 'backstory'>
          <td><?php echo($user_data['ID']); ?></td>
          <td>Backstory</td>
          <td><?php echo($user_data['Title']); ?></td>
      </tr>
      <?php endif;?>
    <?php endfor; ?>
    </table>
  <?php endif; ?>
    <?php if($type == 'comments'): ?>
      <h1 class = 'warning'>IN DEVELOPMENT</h1>
    <?php endif;?>

<script src = "http://localhost/login/Kasp_proj_new/functions/dropdown-controller.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>