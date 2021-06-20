<?php
session_start();
if(isset($_SESSION['id']))
{
require("dbconnection.php");
$cart_id =  $_GET['id'];
$id=$_SESSION['id'];
$q2="UPDATE `tbl_cart` set `status` = 2 WHERE `user_id`=$id and `status`=1";
$result=mysqli_query($con,$q2); // order updated 

  header("Location: checkout.php");
}

else
{
    header("location:login.html");
}
?>