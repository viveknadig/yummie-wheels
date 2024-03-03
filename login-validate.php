<?php
session_start();
include 'db_connect.php';
$email=$_POST['email'];
$pass=$_POST['password'];

$sqlc="SELECT * FROM `Users`  where email='$email' and password='$pass'";
$res=mysqli_query($conn, $sqlc);
if (mysqli_num_rows($res) > 0) {
    $sqlu="select user_id from Users where email='$email'";
    $result=mysqli_query($conn, $sqlu);
    $row=mysqli_fetch_assoc($result);
    $u_id=$row["user_id"];
    $_SESSION['uid']=$u_id;
    header('Location: ./login.php');
}
else{
    header('Location: ./error.php?no=2');
}

echo $_SESSION['active'];
?>