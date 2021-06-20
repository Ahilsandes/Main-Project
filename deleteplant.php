<?php
require("dbconnection.php");
$id=$_GET['id'];
$sql="DELETE FROM `tbl_Plant` WHERE `Plant_id`=$id";
mysqli_query($con, $sql) or  die("RESULT will not get <br>$sql");
mysqli_close($con);
  header("Location: addedplant.php");


?>