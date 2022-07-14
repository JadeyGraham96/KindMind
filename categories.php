<?php 
    // including connection
    include 'includes/connection.php';
    $result = [];

    // if filter table is set get form data.
    if(ISSET($_GET['Category'])) {
        $userCategory = $_GET['Category'];
        $userReview = $_GET['Reviews'];
        $userGenre = $_GET['Genre'];
    
        // sql statements
        $sqlHealth = "SELECT * FROM `health` WHERE `cat_ID` = '$userCategory'";
        $sqlSongs = "SELECT * FROM `songs` WHERE `cat_ID` = '$userCategory'";
        
        // if else statments to intiate filters. 
        if(isset($userReview) && $userReview != "") { $sqlSongs.=" AND `Review` = '$userReview'"; }
        if(isset($userGenre) && $userGenre != "") { $sqlSongs.=" AND `Genre` = '$userGenre'"; }

        // run both queries
        $healthData = $conn->query($sqlHealth);
        $songData = $conn->query($sqlSongs);
    } else {
        // run both queries
        $healthData = $conn->query("SELECT * FROM `health`");
        $songData = $conn->query("SELECT * FROM `songs`");
    }
        
    // return either song data or health data
    if($songData) { 
        while($row = $songData->fetch_assoc()) {
            array_push($result, $row);
        }
    }
    if($healthData) { 
        while($row = $healthData->fetch_assoc()) {
            array_push($result, $row);
        }
    }

    // sort the result
    sort($result);
?>
        <?php include('header.php'); ?>
        <div class="container" style="padding: 50px 0;">
            <h2 style="padding: 0 0 50px;">Categories...</h2>
            <div class="row" style="padding-top: 0 !important;">
                <div class="col-md-3">
                    <?php include('includes/filterBar.php'); ?>
                </div>
                <div class="col-md-9">
                    <div class="row" style="width: 98%;float: right;background: #1e1e1e;height: 100%;padding: 3rem;border-radius: 20px;">
                        <?php
                            // if else statement to find products matching criteria. 
                            if(isset($result) && !empty($result)) {
                                // loop each record from db as variable row
                                foreach($result as $row) {
                                    // displays to divs the product name and url image as row.
                                    echo '<div class="col-md-4">'; 
                                        echo '<div class="top">';
                                            echo '<p class="prod" style="color: white">'.$row['Name'].'</p>';
                                            echo '<img class="prods" src="'.$row['URL_image'].'" style="width: 100%;">';
                                        echo '</div>';
                                            // displays to div the review 
                                            echo '<div class="bottom">';
                                                if(isset($row['Review'])) {
                                                    // for loop adding a review star until it hits the value.
                                                    for($i = 0; $i < $row['Review']; $i++) {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                            </svg>';
                                                    }
                                                }
                                                // button to view the product by id.
                                                if($row['cat_ID'] == "2") {
                                                    echo '<a class="btn btn-submit prod-btn" type="view" href="health.php?id='.$row['ID'].'">View</a>';
                                                } else {
                                                    echo '<a class="btn btn-submit prod-btn" type="view" href="songs.php?id='.$row['ID'].'">View</a>';
                                                }
                                            echo '</div>';
                                    echo '</div>';   
                                }
                            // else if the product does not match the filter criteria display message to user.    
                            } else {
                                echo '<p style="color: white">No resources found for your criteria, please try again.</p>';
                            }
                        ?>
                    </div>      
                </div>
        </div>
        <footer class="container-fluid fixed-bottom">
            <p>Jade Graham 2022&copy;</p>
        </footer>  
    <body>
</html>