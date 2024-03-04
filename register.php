<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/my-login.css">
	<script src="./js/cities.js"></script>
	<script src="js/javascript.js"></script> 
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
                </a>
                <a href="./order.php">
                </a>
                <a href="./login.php">
                    <div class="menu-item active">
                        Login
                    </div>
                </a>
            </div>
            <div class="right-menu">

            </div>
        </div>
    </div>

    <!-- END TOP NAVIGATION -->
	<div class="my-login-page reg">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<!-- <div class="brand">
						<img src="img/logo.jpg" alt="bootstrap 4 login page">
					</div> -->
					<div class="card-fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST" class="my-login-validation" action="./reg-validate.php">
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus placeholder="Enter your Name">
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<!-- <input id="email" type="email" class="form-control" name="email" required> -->
									<input id="email" type="email" class="form-control" pattern="[^ @]*@[^ @]*"  required placeholder="Enter your Email" name="email">
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" required  class="form-control" placeholder="Enter Password">
									<!-- <input type="checkbox" onclick="myFunction()">Show Password 	 -->
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>
								


								<div class="form-group">
									<label for="Address">Address</label>
									<input id="number" type="text" class="form-control" name="address" required data-eye placeholder="Enter Address">
									<div class="invalid-feedback">
										Address
									</div>
								</div>

								<div class="form-group">
									<label for="street">Street</label>
									<input id="number" type="text" class="form-control" name="street" required data-eye placeholder="Enter Street Address">
									<div class="invalid-feedback">
										Street
									</div>
								</div>
								<div class="form-group">
									<label for="State">State</label>
									<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
									<div class="invalid-feedback">
										State
									</div>
								</div>

								<div class="form-group">
									<label for="city">City</label>
									<select id ="state" class="form-control" required name="city"></select>
									<div class="invalid-feedback">
										City
									</div>
								</div>

								<div class="form-group">
									<label for="pincode">Pincode</label>
									<input id="number" type="" class="form-control" name="pincode" required data-eye minlength="6" maxlength="6" min="000000" max="999999" placeholder="Enter Pincode">
									<div class="invalid-feedback">
										Pincode is required
									</div>
								</div>
								<script language="javascript">print_state("sts");</script>
								<div class="form-group">
									<label for="pincode">Phone</label>
									<input  type="number" class="form-control" name="phone" required placeholder="Enter Phone" minlength="10">
									<div class="invalid-feedback">
										Pincode is required
									</div>
								</div>
								

								<!-- <div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div> -->

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="./login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<!-- <div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div> -->
				</div>
			</div>
		</div>
	</section>
	</div>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script> -->
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
</body>
</html>