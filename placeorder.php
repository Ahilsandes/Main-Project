<?php
session_start();
if(isset($_SESSION['id']))
{
require("dbconnection.php");
$total =  $_GET['total'];
$id=$_SESSION['id'];
 $d3=date('Y-m-d');
 $pid=0;
$q1="INSERT INTO `tbl_order`(`user_id`,`Date`,`Status`,`Total`) VALUES($id,'$d3',1,$total)";
$result1=mysqli_query($con,$q1);
$n=mysqli_insert_id($con);


//updating quantity
$q2="SELECT `Plant_id` from `tbl_cart` WHERE `user_id`=$id AND `status`=2";
$result=mysqli_query($con,$q2); 
while ($row = mysqli_fetch_array($result))
{
$pid=$row['Plant_id'];
$q3="UPDATE `tbl_quantity` set `quantity` = `quantity`-1 WHERE `Plant_id`=$pid ";
$result=mysqli_query($con,$q3); 
}

$q4="UPDATE `tbl_cart` set `status` = 3, `order_id` = $n WHERE `user_id`=$id AND `status`=2";
$result=mysqli_query($con,$q4); // order updated 
  header("Location: cart.php");
}

else
{
    header("location:login.html");
}
?>