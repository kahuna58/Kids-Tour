<?php

session_start();

    include("connection.php");
    include("functions.php");
    include("package.php");
    include("signup.php");
    include("signin.php");
    include("about.php");
    include("contacts.php");
    include("style.css");

    //$user_data = check_login($con);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Tour</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <!--font awesome cdn link-->
    <link rel ="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--css file link-->
    <link rel ="stylesheet" href ="style.css">
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

<!-- Home Section -->
<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg)">
                <div class="content">
                    <span>have fun, swim</span>
                    <h3>swimming pools</h3>
                    <a href="package.php" class="btn">learn more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg)">
                <div class="content">
                    <span>have fun, play</span>
                    <h3>playgrounds</h3>
                    <a href="package.php" class="btn">learn more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg)">
                <div class="content">
                    <span>have fun, camp</span>
                    <h3>Camping</h3>
                    <a href="package.php" class="btn">learn more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-4.jpg)">
                <div class="content">
                    <span>have fun, hike</span>
                    <h3>climbing, zip-lining, sailing</h3>
                    <a href="package.php" class="btn">learn more</a>
                </div>
            </div>
        
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    
    </div>
</section>

<!-- Services Section -->
<section class="services">
    <h1 class="heading-title"> our services</h1>

    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventures</h3>
            <p></p>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>

    </div>
</section>

<!-- Home About Section -->

<section class="home-about">
    
    <div class="image">
        <img src="images/home-about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore modi ipsam cumque iusto quae beatae aliquid voluptatum hic. 
        Facere quos nostrum aperiam dignissimos illo repellat asperiores 
        deleniti ipsum voluptatum a.</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>

<!-- Home Packages Section -->

<section class="home-packages">

    <h1 class="heading-title">our packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/home-packages-img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>bronze suite</h3>
                <p>The bronze package with upto 10 days per month 
                    With a cost of $50 USD
                    Offering 40% of our services  .</p>
                <a href="signup.php" class="btn">sign up</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/home-packages-img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>silver suite</h3>
                <p>The silver package with upto 15 days per month
                    with a cost of $70 USD
                    offering 60% of our services  .</p>
                <a href="signup.php" class="btn">sign up</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/home-packages-img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>gold suite</h3>
                <p> The gold package with upto 20 days per month
                    With a cost of $100 USD
                    offering 100% of our services.</p>
                <a href="signup.php" class="btn">sign up</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/home-packages-img-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>diamond suite</h3>
                <p>The diamond package with upto 30 days per month
                    With a cost of $200 USD 
                    Offering 120% of our services  .</p>
                <a href="signup.php" class="btn">sign up</a>
            </div>
        </div>

    </div>

    <div class="load-more"> <a href="package.php" class="btn"> load more</a></div>

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
            <a href="#"><i class="fas fa-phone"></i> +254 791725120 </a>
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