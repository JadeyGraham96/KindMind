<?php
  session_start();

  // Include the database configuration file
  include('connection.php');
  
  // Setting up variables by posting data from register form. i.e name, email, username, password, confirming pw and account. 
  $name = $_POST['Name'];  
  $surname = $_POST['Surname'];
  $email = $_POST['Email'];
  $topic = $_POST['Topic'];
  $message = $_POST['Message']; 
  $signup = $_POST['Signup'];

  // Build the sql
  $sql = "INSERT INTO `contact`(`Name`, `Surname`, `Email`, `Topic`, `Message`, `Signup`) VALUES ('$name', '$surname', '$email', '$topic', '$message','$signup');";

  // Execute the query
  $result = $conn->query($sql);

  // Redirect to thankyou page
  header('location:/GU/contactThankyou.php');
?>