<!-- session -->
<?php
session_start();
?>
    <?php include('header.php'); ?>
     
        <div class="main">
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-4">
                        <img class="about" src="/GU/images/logo-kindmindhead.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="about">About Us...</h2>
                        <p class="about">
                            We always think of new ways to help with thoughts, feelings, and the way we manage our mental health. It's important to be kind 
                            to yourself and the way you are feeling, sometimes life has it's struggles like a mountain but once you have overcome these, the view begins
                            to be clearer. At Kind Minds Co. we belive in things differently, mental health shouldn't ever define you, in fact it makes you who you are
                            but there are so many overwhelming thoughts and emotions we have when we experience mental health and coping with them can be tough!
                        </p>
                        <p class="about">
                            We've revolutionised the way we deal with mental health, offering tips, techniques and practices you can use every day as a way of coping
                            and managing mental health problems and conditions from the use of meditation, journals, videos, tips and more, sign up today with an account 
                            and access a wide range of useful tips and solutions to help.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
        <div class="col-md-12">
                <div class="row">
                <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <h2 class="contact-head">Contact Us...</h2>

                        <form method="post" action="/GU/includes/processContact.php">
                            <div class="contact-form">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Name:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="Name" rows="1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Surname:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="Surname" rows="1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Topic of enquiry:</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Topic" id="inlineFormCustomSelectPref">
                                        <option selected>Choose...</option>
                                        <option value="1">General</option>
                                        <option value="2">Help</option>
                                        <option value="3">Advice</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="Message" rows="4"></textarea>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="Signup">
                                    <label class="form-check-label" for="exampleCheck1">Sign up to newsletter</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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