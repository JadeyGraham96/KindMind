<?php 
    // including connection file.
    include 'includes/connection.php';

    // sql statement to select all data from the products table where the product matches the id selected.
    $sql = 'SELECT * FROM `health` WHERE ID = '.$_GET['id'];
    // data variable to run connection and sql statment.  
    $data = $conn->query($sql);
    // fetching record from database.
    $record = mysqli_fetch_assoc($data);
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
                        <p style="color: white; width: 100%"><?php echo $record['Name']; ?> </p>
                        <img class='prodimg' src="<?php echo $record['URL_image']; ?>" />
                        <p style="color: white"><?php echo $record['Description']; ?> </p>
                    </div>      
                </div>
        </div>
        <footer class="container-fluid fixed-bottom">
            <p>Jade Graham 2022&copy;</p>
        </footer>  
    <body>
</html>