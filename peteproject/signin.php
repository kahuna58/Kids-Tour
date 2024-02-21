<?php
session_start();

    include("connections.php");
    include("functions.php");

    //if($_SERVER['REQUEST_METHOD'] == "POST")
   // {
        //sometjing was posted
        //$username = $_POST['username'];
        //$password = $_POST['password'];

        //if(!empty($username) && !empty($password) && !is_numeric($username))
       // {

            //read from database
           // $query = "select * from users where username = $username";

           // $mysqli_query($con, $query);

            //if($result)
            //{
                //if($result & mysqli_num_rows($result) > 0)
                //{

                   // $user_data = mysqli_fetch_assoc($result);
                    
                   // if($user_data['password'] === $password)
                    //{
                        //$_SESSION['user_id'] = $user_data['user_id '];
                        //header("Location: home.php");
                        //die;
                   // }
                //}

            //}
            //echo "Wrong username or password";
       // }else
       // {
           // echo "Please enter some valid information";
       // }

    //}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <!--font awesome cdn link-->
    <link rel ="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--css file link-->
    <link rel ="stylesheet" href ="css/style.css">
</head>
<body>
    <!-- Navigation bar Section -->    
    <section class="header">
        <a href="home.php" class="logo">KIDS TOUR</a>

        <nav class="navbar">
            <a href="about.php">about us</a>
            <a href="package.php">packages</a>
            <a href="contacts.php">contacts</a>
            <a href="signup.php">sign up</a>
        </nav>

        <div id="menu-toggle" class="fas fa-bars"></div>
    </section>


    <section class="sign-up">

    <h1 class="heading-title">Sign In</h1>

    <form method="post" class="signup-form">

        <div class="flex">
            <div class="inputBox">
                <span>username :</span>
                <input type="text" placeholder="enter your username" name="username">
            </div>
            <div class="inputBox">
                <span>password :</span>
                <input type="password" placeholder="enter your password" name="password">
            </div>
            
            <a href="signup.php" style="font-size: 2rem;">Don't have an account? Sign Up</a>
        </div>
        
        <input type="submit" value="Sign In" class="btn" name="send">
        
    </form>

</section>







<!-- footer section -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="about.php"><i class="fas fa-angle-right"></i> about us</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> packages</a>
            <a href="signup.php"><i class="fas fa-angle-right"></i> sign up</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> FAQ</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +254 791725120</a>
            <a href="#"><i class="fas fa-phone"></i> +254 791725120</a>
            <a href="#"><i class="fas fa-envelope"></i> kidstour@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> nairobi, kenya - 01000</a>
        </div>
        
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>

    </div>

    <div class="rights">all rights reserved.</div>
</section>


<!-- swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- js file link -->
<script src = "js/script.js"></script>
</body>
</html>