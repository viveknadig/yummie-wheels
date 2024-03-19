<?php 
session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vivek Nadig">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummie Wheels</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- MOBILE NAV -->
    <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active">
            <a href="./index.php">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="./res.php">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="./orders.php">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="./login.php">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <!-- END MOBILE NAV -->
    <!-- BACK TO TOP BTN -->
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo">
                    Yummie Wheels
                </div>
            </a>
            <div class="menu h-xs">
                <a href="./index.php">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="./res.php">
                    <div class="menu-item">
                        Restaurants
                    </div>
                </a>
                <a href="./order.php">
                    <div class="menu-item">
                        Orders
                    </div>
                </a>
                <a href="./login.php">
                    <div class="menu-item">
                    <?php
							if(!isset($_SESSION['uid'])){
                                echo "Login";
                            }
                            else{
                                echo "Profile";
                            }
                    ?>
                    </div>
                </a>
            </div>
            <a href="./order.php">
            <div class="right-menu">
                <div class="cart-btn">
                    <i class='bx bx-cart-alt'></i>
                </div>
            </div>
            </a>
        </div>
    </div>
    <!-- END TOP NAVIGATION -->
    <!-- SECTION HOME -->
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(img/ff2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h1 class="left-to-right play-on-scroll">
                            Yummie Wheels
                        </h1>
                        <p class="left-to-right play-on-scroll delay-2">
                            Yummie Wheels is a food delivery service that brings delicious meals to your doorsteps in minutes.You can choose from a variety of cuisines and restaurants, and enjoy exclusive offers and discounts.
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
                            <button onClick="window.location.href='./res.php';">
                                Order Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HOME -->
    <!-- SECION ABOUT -->
    <section class="about fullheight align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="assets/Untitled design.png" alt=""   width: 15px;
                    height: 15x;
                        class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3>
                            <span class="third-color">We</span> create <span class="third-color">delicious</span>
                            memories for <span class="third-color">you</span>
                        </h3>
                        <p>
                            Are you Hungry for some delicious food,but don't have the time or energy to cook or go out?Don't worry
                            We have you covered! Our food delivery service is the best way to enjoy your favorite dishes from a variety of 
                            cuisines,delivered right to your door in minutes
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECION ABOUT -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(assets/katherine-chase-4MMK78S7eyk-unsplash.jpg);">
        <div class="container">
            <div class="food-menu">
                <h1>
                    What will <span class="third-color">you</span> eat today?
                </h1>
                <p>
                Treat Yourself to a gourmet experience with Yummie Wheels,The online food ordering platform for restaurants.Choose from a wide range of cuisines and categories,and get fresh food delivery in minutes
                </p>
                <div class="food-category">
                    <!-- <div class="zoom play-on-scroll"> -->
                        

               
            </div>
        </div>
    </section>
    <!-- END FOOD MENU SECTION -->
    
    <!-- FOOTER SECTION -->
    <section class="footer bg-img" style="background-color: var(--third-color);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>
                        Yummie Wheels
                    </h1>
                    <br>
                    <p>Yummie Wheels is a food delivery service that brings delicious meals to your doorsteps in minutes.Whatever you are craving for pizza,pasta ,biriyani.</p>
                    <br>
                    <p>Email: <a href="mailto:contact@yummie.com">contact@yummiewheels.com</a></p>
                    <p>Phone: <a href="tel:+911234567890">+911234567890</a></p>
                    <p>Website: yummiewheels.com</p>
                </div>
                <div class="col-2 col-xs-12">
                    <h1>
                        About us
                    </h1>
                    <br>
                    <p>
                        <a href="#">
                            Privacy policy
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Contact
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            About
                        </a>
                    </p>
                </div>
                <div class="col-4 col-xs-12">
                    <h1>
                        Subscribe & media
                    </h1>
                    <br>
                    <p>Subscribe For official infromation and Discounts and more</p>
                    <div class="input-group" style="background-color: var(--secondary-color);">
                        <input required="text" placeholder="Enter your email">
                        <button onClick="window.location.href='./login.php';">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->

    <script src="js/main.js"></script>
</body>

</html>
