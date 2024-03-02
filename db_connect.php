<?php
    $server="localhost";
    $username="root";
    $password="toor";
    $db_name="yw";

    $conn="";
    //tries to connect to db
    try{
        $conn=mysqli_connect($server,$username,$password,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "Connection Error";
    }
?>