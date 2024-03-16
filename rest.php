<?php
use PhpMyAdmin\Table;
include 'db_connect.php';
session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
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
        <div class="mb-nav-item">
            <a href="./index.php">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item active">
            <a href="./res.php">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="./order.php">
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
    <a href="#" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="./index.php">
                <div class="logo">
                    Yummie Wheels
                </div>
            </a>
            <div class="menu h-xs">
                <a href="./index.php">
                    <div class="menu-item">
                        Home
                    </div>
                </a>
                <a href="./res.php">
                    <div class="menu-item active">
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
            <div class="right-menu">
                <div class="cart-btn">
                    <i class='bx bx-cart-alt'></i>
                </div>
            </div>
        </div>
    </div>

    <!-- END TOP NAVIGATION -->
    <!-- FOOD MENU SECTION -->

    <!-- <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section" -->
        <section>
        <div class="container">
            <div class="food-menu">
            <aside>
                <?php
                    $restnum=$_GET['res_num'];
                    $sqlr="select * from Restaurants where restaurant_id='$restnum'";
                    $resr=mysqli_query($conn, $sqlr);
                    if (mysqli_num_rows($resr) > 0) {
                        $row = mysqli_fetch_assoc($resr);
                        $rest_img=$row["img"];
                        $rest_name=$row["name"];
                        $rest_addr=$row["address"];
                        $rest_ph=$row["phone"];
                        $rest_desp=$row["desp"];
                    }
                    echo<<<res
                    <img src="$rest_img" width="100%" height="100%">
                    <h3>$rest_name</h3>
                    <h7>$rest_addr</h7><br><br>
                    <h7>Phone: <a href="tel:+91$rest_ph">+91$rest_ph</a></h7><br><br>
                    <h7>$rest_desp</h7>
                    res;
                    ?>
            </aside>
                <h1>
                    Choose <span class="third-color">From</span> our Menu
                </h1>
                <p>
                    Choose from our wide variety of menu to thirst your cravings
                </p>
                <div class="food-item-wrap all">
                <?php

                    $restnum=$_GET['res_num'];
                    $sqlm="SELECT * FROM `Menu` where restaurant_id=$restnum";
            $resm=mysqli_query($conn, $sqlm);
            if (mysqli_num_rows($resm) > 0) {
                while($row = mysqli_fetch_assoc($resm)) {
                    $menu_id=$row["menu_id"];
                    $menu_name=$row["item_name"];
                    $menu_price=$row["price"];
                    $menu_img=$row["img"];
                    echo<<<menu
                    <div class="food-item salad-type">
                    <div class="item-wrap bottom-up play-on-scroll">
                    <a href="mycart.php?m_no=$menu_id&r_name=$rest_name&m_name=$menu_name&m_price=$menu_price">
                        <div class="item-img">
                            <div class="img-holder bg-img"
                                style="background-image: url('$menu_img');"></div>
                        </div>
                        <div class="item-info">
                            <div>
                                <h3 style="color:white;">
                                $menu_name
                                </h3>
                                <span>
                                ₹ $menu_price
                                </span>
                            </div>
                            <div class="cart-btn">
                            <a href="mycart.php?m_no=$menu_id&r_name=$rest_name&m_name=$menu_name&m_price=$menu_price">
                                <i class='bx bx-cart-alt'></i></a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                menu;
                }


            }


?>


 
                </div>
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
                    <p>Email: <a href="mailto:contact@yummie.com">contact@yummie.com</a></p>
                    <p>Phone: <a href="tel:+911234567890">+911234567890</a></p>
                    <p>Website: yummiefood.com</p>
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
