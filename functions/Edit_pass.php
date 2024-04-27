<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $pass = $_POST['Epass'];
    $ID = $user_data['user_id'];

    if(!empty($desc))
    {
        $querry = "update users set password = '$pass' where user_id = $ID";
        mysqli_query($con, $querry);
        Header('Location: Profile.php');
        die;
    }
}