<?php
session_start();

include('functions.php');
include('connection.php');

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //Something was posted
   $User_name = $_POST['User_name_login'];
   $Password = $_POST['Password_login'];

   if(!empty($User_name) && !empty($Password))
   {
        //read from database
        $query = "select * from users where username = '$User_name' limit 1";
        $result = mysqli_query($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] === $Password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    $user_data = check_login($con);
                    echo($_SESSION['user_id']);
                    header('Location: choicepage.php');
                    die;
                }
                else{
                    echo "wrong password!";   
                }
            }
            else
            {
                echo "wrong username!"; 
            }
        }
        else{
        echo "sorry, something went wrong with our database, try again!";
        }  
   }
   else
   {
        echo "the data you provided is empty, please try again!";
   }
}