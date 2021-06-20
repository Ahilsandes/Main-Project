<?php
session_start();
$email=$_POST["email"];
$password=$_POST["password"];

$r="select login_id from tbl_register where email='$email'";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);
if($n>0)
{
  $a=mysqli_fetch_array($result);
  $login_id=$a['login_id'];
}


$sq="update tbl_login set password='$password' where login_id='$login_id'";
if(mysqli_query($con,$sq))
{
  ?>
  <script>alert("password successfully changed");
  location.href="login.html";
   exit;
  </script>
  <?php
}
mysqli_close($con);
   ?>