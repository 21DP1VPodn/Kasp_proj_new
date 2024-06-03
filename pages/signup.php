<?php
// Iekļaut nepieciešamos failus datubāzes savienojumam un funkcijām
include("connection.php");
include("functions.php");

// Pārbaudīt, vai lietotājs ir pieteicies un iegūt lietotāja datus
$user_data = check_login($con);
// ja lietotās jau ir pieteicies pabeigt darbību
if (empty($user_data) == false)
{
     echo('an error has occured');
     die;
}

// Pārbaudīt, vai pieprasījuma metode ir POST (formas iesniegšana)
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Iegūt nosūtītos formas datus
    $Name = $_POST['Name'];
    $Mail = $_POST['Mail'];
    $User_name = $_POST['User_name'];
    $Password = $_POST['Password'];

    // Pārbaudīt ka saņemtie dati nav tukši
    if (!empty($Name) && !empty($Mail) && !empty($User_name) && !empty($Password)) {

          // Validēt ka email laukā ir @ un .
          if (!filter_var($Mail, FILTER_VALIDATE_EMAIL)) 
          {
               echo "The email you provided is not valid";
               die;
          }
          
          // pārbaudam ka lietotājvārds atbilst mājaslapas kriterijiem
          if (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $User_name)) {
               echo "Invalid username! Username should be 3-20 characters long and can contain only letters, numbers, and underscores.";
               die;
          }

          //pārbaudam ka parole atbilst mājaslapas kriterijiem
          if (strlen($Password) < 8 || !preg_match("/[A-Za-z]/", $Password) || !preg_match("/[0-9]/", $Password)) {
               echo "Password must be at least 8 characters long and include at least one letter and one number.";
               die;
           }


        // Ģenerēt nejaušu lietotāja ID
        $user_id = random_num(20);

        // Sagatavot SQL vaicājumu, lai ievietotu jaunu lietotāju datubāzē
        $query = "insert into users (user_id, username, password, Name, Email) values ('$user_id', '$User_name', '$Password', '$Name', '$Mail')";

        // Izpildīt vaicājumu
        mysqli_query($con, $query);

        // Pāradresēt lietotāju uz galveno lapu
        header('Location: choicepage.php');
        die;
    } else {
        // Parādīt kļūdas ziņojumu, ja formas dati ir tukšī
        echo "One of the provided columns is empty, please try again!";
        die;
    }
}