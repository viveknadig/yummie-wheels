<?php 
include 'db_connect.php';

$email=$_POST['email'];
$name=$_POST['name'];
$pass=$_POST['password'];
$ph=$_POST['phone'];
$ph_no=$ph;
$add=$_POST['address'];
$street=$_POST['street'];
$state=$_POST['stt'];
$city=$_POST['city'];
$pin_code=$_POST['pincode'];
$sqlreg="select * from Users where email='$email'";
$resultr=mysqli_query($conn, $sqlreg);
echo "enter Valid phone";
if (mysqli_num_rows($resultr) > 0) {
    header('Location: ./error.php?no=0');
}
else{
    $sql_user="INSERT INTO `Users` (`user_id`, `name`, `email`, `password`, `phone`) VALUES (NULL,'{$name}','{$email}','{$pass}','{$ph_no}'); ";
    mysqli_query($conn, $sql_user);
    $sql_address="select user_id from Users where email='$email'";
    $result=mysqli_query($conn, $sql_address);
    $row=mysqli_fetch_assoc($result);
    $u_id=$row["user_id"];
    $sql_add="INSERT INTO `Address` (`address_id`, `user_id`, `state`, `city`, `street`, `pincode`) VALUES (NULL, '{$u_id}', '{$state}', '{$city}', '{$street}', '{$pin_code}'); ";
    mysqli_query($conn, $sql_add);
    header('Location: ./error.php?no=1');
}


?>
