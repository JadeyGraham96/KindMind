<?php 
    // including connection
    include 'includes/connection.php';
    $result = [];

    if(isset($_GET['q'])) {
        // sql statements
        $healthSQL = "SELECT * FROM `health` WHERE `Name` LIKE '%".$_GET['q']."%' OR `Description` LIKE '%".$_GET['q']."%'";
        $songSQL = "SELECT * FROM `songs` WHERE `Name` LIKE '%".$_GET['q']."%' OR `Description` LIKE '%".$_GET['q']."%' OR `Genre` LIKE '%".$_GET['q']."%' OR `Artist` LIKE '%".$_GET['q']."%'";
    
        // run both queries
        $healthData = $conn->query($healthSQL);
        $songData = $conn->query($songSQL);

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

        sort($result);
    }
?>
    <?php include('header.php'); ?>
        <div class="container" style="padding: 50px 0;">
            <h2 style="padding: 0 0 50px;">Search Results...</h2>
            <div class="row" style="padding-top: 0 !important;">
                <div class="col-md-12">
                    <div class="row" style="width: 100%;background: #1e1e1e;height: 100%;padding: 3rem;border-radius: 20px;">
                        <?php if(!empty($result)) {
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
                                            // button to view the product by id.
                                            if($row['cat_ID'] == "2") {
                                                echo '<a class="btn btn-submit prod-btn" type="view" href="health.php?id='.$row['ID'].'">View</a>';
                                            } else {
                                                echo '<a class="btn btn-submit prod-btn" type="view" href="songs.php?id='.$row['ID'].'">View</a>';
                                            }
                                        echo '</div>';
                                echo '</div>';   
                            }
                        } else { ?>
                            <p style="color: white">No results found for your criteria, please try again.</p>
                        <?php } ?>
                    </div>      
                </div>
        </div>
        <footer class="container-fluid fixed-bottom">
            <p>Jade Graham 2022&copy;</p>
        </footer>  
    <body>
</html>