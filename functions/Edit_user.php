<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user = $_POST['Euser'];
    $ID = $user_data['user_id'];

    if(!empty($desc))
    {
        $querry = "update users set username = '$user' where user_id = $ID";
        mysqli_query($con, $querry);
        Header('Location: Profile.php');
        die;
    }
}