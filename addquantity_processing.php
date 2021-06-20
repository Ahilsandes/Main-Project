<?php
// print_r($_POST);print_r($_FILES);die();




$qty= $_POST['qty'];
$Plant_id= $_POST['id'];

    require("dbconnection.php");
$q = "select * from `tbl_quantity` where `Plant_id` = '$Plant_id'";
$result = mysqli_query($con, $q);
if (!$result) die('check result will not get');
if (mysqli_num_rows($result) > 0)
{
 $q="UPDATE `tbl_quantity` SET `quantity`=$qty WHERE `Plant_id` =$Plant_id";
$result = mysqli_query($con, $q);
mysqli_close($con);
if (!$result){
  die("RESULT will not get <br>$q");
} else {
  header("Location: admin-index.php");
}
}

$q="INSERT INTO `tbl_quantity`( Plant_id,quantity) VALUES ($Plant_id,$qty)";
$result = mysqli_query($con, $q);
mysqli_close($con);
if (!$result){
  die("RESULT will not get <br>$q");
} else {
  header("Location: admin-index.php");
}
  
?>
