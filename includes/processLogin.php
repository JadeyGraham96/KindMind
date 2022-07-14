<?php
  session_start();

  // Include the database configuration file
  include('connection.php');

  $user = $_POST['inputUser'];
  $password = $_POST['inputPassword'];
  $hashedPasswordFromDB = $conn->query("SELECT `Password` FROM `users` WHERE `Username` = '$user'");

  if ($hashedPasswordFromDB) { 
      if(password_verify($password, $hashedPasswordFromDB->fetch_assoc()['Password'])) {
  
        // Store users name to session and set loggedin to true and a message for the user
        $_SESSION['userName'] = $user;
        $_SESSION["userLogged"] = true;
        $_SESSION["loggedin"] = true;
        $_SESSION['message'] = ucwords('Welcome '.$user.'!');
        
        header('location: /GU/user.php');
      } else {
        echo "Password incorrect";
      }
  } else {
      //displays error message on page.
      echo "User doesnt exist!";
  }
?>