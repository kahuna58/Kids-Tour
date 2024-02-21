<?php
session_start();

    include("connections.php");
    include("functions.php");

    //if($_SERVER['REQUEST_METHOD'] == "POST")
    //{
        //something was posted
       // $firstname = $_POST['firstname'];
        //$lastname = $_POST['lastname'];
       // $username = $_POST['username'];
        //$password = $_POST['password'];
        //$telephone = $_POST['telephone'];
       // $age = $_POST['age'];
       // $gender = $_POST['gender'];
       // $country = $_POST['country'];

       // if(!empty($username) && !empty($password) && !is_numeric($username))
        //{

            //save to database
            //$user_id = random_num(20);
            //$query = "insert into users (user_id,firstname,lastname,username,password,telephone,age,gender,country) values('$user_id','$firstname','$lastname','$username','$password','$telephone','$age','$gender','$country')";
            
            //mysqli_query($con, $query);

            //header("Location: signin.php");
            //die;
       // }else
        //{
            //echo "Please enter some valid information";
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


<div class="heading" style="background:url(images/signup-img.jpg) no-repeat">
    <h1>sign up</h1>
</div>

<!-- Sign Up Section -->

<section class="sign-up">

    <h1 class="heading-title">sign up now!</h1>

    <form method="post" class="signup-form">

        <div class="flex">
            <div class="inputBox">
                <span>firstname :</span>
                <input type="text" placeholder="enter your firstname" name="firstname">
            </div>
            <div class="inputBox">
                <span>lastname :</span>
                <input type="text" placeholder="enter your lastname" name="lastname">
            </div>
            <div class="inputBox">
                <span>username :</span>
                <input type="text" placeholder="enter your username" name="username">
            </div>
            <div class="inputBox">
                <span>password :</span>
                <input type="password" placeholder="enter your password" name="password">
            </div>
            <div class="inputBox">
                <span>telephone :</span>
                <input type="number" placeholder="enter your telephone" name="telephone">
            </div>
            <div class="inputBox">
                <span>age :</span>
                <input type="number" placeholder="enter your age" name="age">
            </div>
            <div class="inputBox">
                <span>gender :</span>
                <input type="text" placeholder="gender" name="gender">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="address" name="address">
            </div>
            <div class="inputBox">
                <span>country :</span>
                <input type="text" placeholder="country" name="country">
            </div>

            <a href="signin.php" style="font-size: 2rem;">Already have an account? Sign In</a>
        </div>
        
        <input type="submit" value="Sign Up" class="btn" name="send">
        
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