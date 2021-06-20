<?php
session_start();
if(isset($_SESSION['id']))
{


//MOVE UPLOADED IMAGE TO DB FOLDERS
require("dbconnection.php");
$cart_id =  $_GET['id'];
$q2="delete FROM `tbl_cart` WHERE `cart_id`=$cart_id";
mysqli_query($con,$q2);
  header("Location: cart.php");
}
else
{
    header("location:login.html");
}
?>