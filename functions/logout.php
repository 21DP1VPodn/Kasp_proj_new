<?php
session_start();
// Unset session variable
unset($_SESSION['user_id']);
header('Location: choicepage.php');
exit;
