<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "dnd_database";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{
    die("Failed to connect to the database");
}

