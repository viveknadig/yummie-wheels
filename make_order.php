<?php
include './db_connect.php';
session_start();
$uid=$_SESSION['uid'];
if(!isset($_SESSION['uid'])){
    header('Location: ./error.php?no=3');
}
$uid=$_SESSION['uid'];
$did=rand(4001,4010);
$m_id=$_GET['menu_id'];
$sqlp="select price from Menu where menu_id=$m_id";
$res=mysqli_query($conn, $sqlp);
$row = mysqli_fetch_assoc($res);
$price=$row["price"];
$sqlorder="INSERT INTO `Orders` (`order_id`, `user_id`, `order_total`, `delivery_status`, `driver_id`, `menu_id`) VALUES (NULL, '{$uid}', '{$price}', 'cooking', '{$did}', '{$m_id}');";
mysqli_query($conn, $sqlorder);
$re="select order_id from Orders where user_id=$uid order by order_id DESC";
$rep=mysqli_query($conn, $re);
$ro=mysqli_fetch_assoc($rep);
$od=$ro["order_id"];
header("location: ./payment/pay.php?m_id=$m_id&oid=$od");
?>