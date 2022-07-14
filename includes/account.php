<?php
  session_start();

  // Include the database configuration file
  include('includes/connection.php');

  $user = $_POST['userName'];
  $password = password_hash($_POST['userPass']);
  $result = $conn->query("SELECT * FROM users WHERE Username = '$user' AND Password = '$password'");

  if ($result->num_rows != 0) {
    
    // Turn result of user sql query to array for easier access to field names 
    $accountType = $result->fetch_assoc()['Account'];

    // Store users name to session and set loggedin to true and a message for the user
    setcookie("userName", $user);    
    setcookie("loggedin", true);  
    setcookie("message", ucwords('Welcome '.$user.'!'.'<br/>'.$accountType.' '.'account'));
	
    // If standard user redirect to user php else redirect to admin php note: admin.php not set up as user now has admin access
    if($accountType == 'standard') {
      header('Location: /GU/user.php');    }
    else {
      header('Location: /GU/user.php');
    }

  }
  else {
    //displays error message on page.
    echo "error!";

  }