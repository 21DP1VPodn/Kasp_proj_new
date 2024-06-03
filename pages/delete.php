<?php 
session_start();
include('connection.php');

// Step 1: Delete the current user
$user_id = $_SESSION['user_id'];
$query1 = "DELETE FROM users WHERE user_id = $user_id;";
mysqli_query($con, $query1);

// Step 2: Fetch the new maximum ID from the users table
$query0 = 'SELECT MAX(ID) as max_id FROM users';
$result = mysqli_query($con, $query0);

$max_id = 0; // Default value if no rows in the table
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['max_id'] !== null) {
        $max_id = $row['max_id'];
    }
}

// Calculate the next auto-increment value
$next_auto_increment = $max_id + 1;

// Step 3: Set the new auto-increment value
$query2 = "ALTER TABLE users AUTO_INCREMENT = $next_auto_increment;";
mysqli_query($con, $query2);

// Unset the session user_id
unset($_SESSION['user_id']);

// Redirect to choicepage.php
header('Location: choicepage.php');
die();