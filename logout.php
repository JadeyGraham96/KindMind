<?php
//session
    session_start();
    // if user session is false, destroy session 
    $_SESSION["userLogged"] = false;
    session_destroy();

    header('location:/GU/index.php'); // after logging out locate user back to home. 
?>