<?php
use PhpMyAdmin\Table;
include 'db_connect.php';
session_start();
$menuc_id=$_GET['m_no'];
$resc_name=$_GET['r_name'];
$menuc_name=$_GET['m_name'];
$menuc_price=$_GET['m_price'];
$uid=$_SESSION['uid'];
include 'db_connect.php';
session_start();
$uid=$_SESSION['uid'];
if(!isset($_SESSION['uid'])){
    header('Location: ./error.php?no=3');
}

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
            <div class="">
                <h1 style="text-align: center;">
                    My  <span class="third-color">cart</span>
                </h1>
                <p style="text-align: center;">
                    Here is the order summary:
                </p>
            </div>
        </div>
    <br>
    <div class="pi">
    <figure class="pizza">
  <div class="pizza__hero">
    <img src="./img/menu/<?php echo $menuc_id?>.jpg" alt="Pizza" class="pizza__img">
  </div>
  <div class="pizza__content">
    <div class="pizza__title">
      <h1 class="pizza__heading"><?php echo $menuc_name?></h1>
    </div>
    <p class="pizza__description">Cooked with Love,Served with joy from <br> <strong><?php echo $resc_name?></strong></p>
    <div class="pizza__details">
      <p class="pizza__detail">₹ <?php echo $menuc_price?></p>
    </div>
    <div class="col-md-4 col-sm-4 margin-bottom-40">
          <a href="./make_order.php?menu_id=<?php echo $menuc_id?>&u_id=<?php echo $uid?>" class="btn btn-mod btn-border btn-circle btn-medium">
            Order Now
          </a>
        </div>
    </div>
  </div>
 
  
</figure>
</div>
<br>
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
