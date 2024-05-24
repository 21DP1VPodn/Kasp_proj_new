<?php
include("connection.php");
include("functions.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //Something was posted
   $Name = $_POST['Name'];
   $Mail = $_POST['Mail'];
   $User_name = $_POST['User_name'];
   $Password = $_POST['Password'];

   if(!empty($Name) && !empty($Mail) && !empty($User_name) && !empty($Password))
   {
        //Save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id, username, password, Name, Email) values ('$user_id', '$User_name', '$Password', '$Name', '$Mail')";

        mysqli_query($con, $query);
        header('Location: choicepage.php');
        die;
   }
   else
   {
        echo "Information you provided is not valid, please check your info and try again!";
   }
}
