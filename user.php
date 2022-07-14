<!-- including authentication file and message to display using if set statement-->
<?php
  include 'includes/authentication.php';
  $message = $_SESSION['message'];
?>


    <?php include('header.php'); ?>
        <div class="userArea">
          <div class="container">
                <div class="row">
                  <div class="userSection">
                <div class="row">
                  <div class="col-md-4">
                    <img class="user-photo" src="/GU/images/user.png" alt="">
                  </div> 
                <div class="col-md-8"> 
                <div class="message">
                  <!-- echo message to screen to welcome user. -->
                  <?php echo $message  ?>
                </div>
              </div>
            </div>  
            <div class="bottom">
              <div class="buttons">
                <button onclick="location.href='calander.php'" class="btn btn-videos" type="myVid">My Calendar</button>
                <button onclick="location.href='goals.php'" class="btn btn-goals" type="myGoals">My Goals</button>
                <button onclick="location.href='logout.php'" class="btn btn-logout" type="logout">Logout</button>
              </div>
            </div>
          </div>
        </div>  
        <footer class="container-fluid fixed-bottom">
            <p>Jade Graham 2022&copy;</p>
        </footer>  
    <body>
</html>