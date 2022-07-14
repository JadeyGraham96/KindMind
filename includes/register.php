<?php
  session_start();

  // Include the database configuration file
  include('connection.php');

  // Setting up variables by posting data from register form. i.e name, email, username, password, confirming pw and account. 
  $usersName = $_POST['inputName1'];  
  $usersSurname = $_POST['inputSurname'];
  $usersEmail = $_POST['inputEmail2'];
  $userNames = $_POST['inputUser1'];
  $userPass = $_POST['inputPass']; 
  $confPass = $_POST['inputConfirmPasswrd'];

  // if else to check user password matches with confirm, inserts sql statement into users adding their values. 
  if ($userPass == $confPass) {
      $userPass = password_hash($userPass, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users`(`Name`, `Surname`, `Username`, `Email`, `Password`) VALUES ('$usersName', '$usersSurname', '$userNames', '$usersEmail','$userPass');";
      
      // result is checking sql against connection. 
      $result = $conn->query($sql);

      // if result is successful (true), user session is equal to username, alert the user a record has been created successfully. 
      if ($result === TRUE) {
          $SESSION["saveChange"] = $userNames;
          echo "New record created successfully";

          // else if the account is standard then redirect to user page
          header('location:/GU/user.php?username='.$usersName);
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error; // else the connection has failed and can't process registration
      }
  }
  else { // Else passwords don't match.
      echo "Passwords do not match!";
  }
?>