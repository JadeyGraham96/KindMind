<?php
    // connection variable using sqli to connect to local host database.
    $conn = new mysqli("localhost","root","","gcu"); 
    //live- //$conn = new mysqli();


    // Check connection
    if ($conn -> connect_errno) {
        //alerts user that they have failed to connect to the db.
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit(); // exits session.
    }
?>