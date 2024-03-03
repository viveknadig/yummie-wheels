<?php 
session_start();
include './db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Yummie Wheels</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/my-login.css">
	<link rel="stylesheet" href="./css/style.css">
</head>


<body class="my-login-page log">
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
                    <div class="menu-item active">
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
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="card-fat">
						<div class="card-body">
							<?php
							if(!isset($_SESSION['uid'])){ 
							echo<<<login
							<h4 class="card-title">Login</h4>
							<form method="POST" class="login-validate.php" action="./login-validate.php">
							<div class="form-group">
							<label for="email">E-Mail Address</label>
							<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
							<div class="invalid-feedback">
							Email is invalid
							</div>
							</div>
							<div class="form-group">
							<label for="password">Password
							</label>
							<input id="password" type="password" class="form-control" name="password" required data-eye>
							<div class="invalid-feedback">
							Password is required
							</div>
							</div>
							<div class="form-group m-0">
							<button type="submit" class="btn btn-primary btn-block">
							Login
							</button>
							</div>
							<div class="mt-4 text-center">
							Don't have an account? <a href="./register.php">Create One</a>
							</div>
							</form>
							</div>
							login;
						}
						else{
							$user_id=$_SESSION['uid'];
							$sql="select * from Users where user_id=$user_id";
							$result=mysqli_query($conn, $sql);
   							$row=mysqli_fetch_assoc($result);
   							$name=$row["name"];
							$email=$row["email"];
							$ph=$row["phone"];
							$sqla="SELECT * FROM `Address` where user_id=$user_id";
							$addrow=mysqli_query($conn, $sqla);
							$ar=mysqli_fetch_assoc($addrow);
							$state=$ar["state"];
							$city=$ar["city"];
							$street=$ar["street"];
							$pin=$ar["pincode"];
							echo<<<in
							<h2 style="text-align:center;">Welcome, $name</h2>
							<br>
							<h5><strong>Email:</strong>{$email}.</br>
							<strong>Phone Number:</strong>{$ph}.</br>
							<strong>Address:</strong>{$street}.</br><strong>City:</strong>{$city}</br><strong>State:</strong>{$state}</br><strong>Pincode:</strong>{$pin}
							</h5>
							<form action="login.php" method="post">
							<input type="submit" name="logout" value="logout" style="background-color: #3D7065;border-radius: 1.5rem;border:none; color: white;padding: 16px 32px;text-decoration: none;margin: 4px 2px;
							cursor: pointer;display: block;width: 100px;margin: 0 auto;">
							</form>
							in;
							if(isset($_POST['logout'])){
								session_destroy();
								header('Location: ./login.php');
							}
						}
						echo $_SESSION['active'];
						?>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
