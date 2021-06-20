<?php
session_start();
if(isset($_SESSION['id']))
{

require("dbconnection.php");
$pid =  $_GET['id'];
$q2="SELECT * FROM `tbl_plant` WHERE `Plant_id`=$pid";
$result=mysqli_query($con,$q2);
$id=$_SESSION['id'];
while ($row = mysqli_fetch_array($result)){
$amount=$row['Plant_amount'];
    
$q="INSERT INTO `tbl_cart`( `user_id`,`Plant_id`, `amount`,`status`,`order_id`) VALUES
   ($id,$pid,$amount, 1,0)";
 mysqli_query($con, $q) or  die("RESULT will not get <br>$q");
mysqli_close($con);
  header("Location: cart.php");
}
}




else
{
    header("location:login.html");
}
?>