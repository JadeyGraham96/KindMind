<!-- session -->
<?php
session_start();
?>
    
    <?php include('header.php'); ?>
        <div class="top-login">
            <div class=top-logo>
              <img class="logo-jumbo-log" src="/GU/images/logo-jumbo.png" alt="">
            </div>
        </div>
        <!-- login area -->    
        <div class="login">
            <form method="post" action="/GU/includes/processLogin.php">
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label for="inputUser" class="col-sm-2 col-form-label">Username:</label>
                    <input type="text" class="form-control" name="inputUser" placeholder="Username">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                </div>
                <div class="login-bttn">
                     <button type="submit" name="userLogged" class="btn btn-primary">LOGIN</button>
                </div> 
                <div class="sign-up">
                    <p>Don't have an accout? <a class="nav-link" href="#"  data-toggle="modal" data-target="#smallModal">Sign up </a>Today!</p>
                </div> 
            </form>
        </div>
        <!-- pop-up modal -->
        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Register</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Sign Up</h3>
                        <form method="post" action="/GU/includes/register.php">
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <input type="text" class="form-control" name="inputName1" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <label for="name" class="col-sm-2 col-form-label">Surname:</label>
                                    <input type="text" class="form-control" name="inputSurname" placeholder="Surname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <label for="name" class="col-sm-2 col-form-label">Username:</label>
                                    <input type="text" class="form-control" name="inputUser1" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <label for="name" class="col-sm-2 col-form-label">Email:</label>
                                    <input type="text" class="form-control" name="inputEmail2" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Create Password</label>
                                    <input type="password" class="form-control" name="inputPass" placeholder="Create a Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="inputConfirmPasswrd" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="saveChange" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>   
           </div>
        </div>   
        <footer class="container-fluid fixed-bottom">
            <p>Jade Graham 2022&copy;</p>
        </footer>  
    <body>
</html>