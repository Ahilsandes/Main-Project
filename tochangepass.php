<?php session_start(); ?>
<body style="color: black;">
<?php
function redirectTo($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
// print_r($_POST);print_r($_FILES);die();
$con=mysqli_connect("localhost","root","","rosegardens") or die("couldnt connect to the server");
if(isset($_SESSION['id']))
{
  
  echo "<br>";
  if(isset($_POST['cpass'])) {
  	$currentpass = md5($_POST['passname1']) ;
  	$newpass = md5($_POST['passname2']);
  	$cnewpass = md5($_POST['passname3']);
  	$currentpass = addslashes($currentpass);
  	$newpass = addslashes($newpass);
  	$cnewpass = addslashes($cnewpass);
  	$currentpass = mysqli_real_escape_string($con, $currentpass);
  	$newpass = mysqli_real_escape_string($con, $newpass);
  	$cnewpass = mysqli_real_escape_string($con, $cnewpass);
    $id=$_SESSION['id'];

      $sql =  "SELECT password FROM tbl_login WHERE login_id= '$id'";
    $result = mysqli_query($con,$sql);
    if (!$result) die('check result will not get');

    while ($row = mysqli_fetch_array($result)){
    
      $pass = $row['password'];
     
      if ($currentpass != $pass) {
        session_start();
      	$error = "<center><h4><font color='#FF0000'>Incorrect Current Password!</h4></center></font>";  	
      }
      else if ($currentpass == $pass && $newpass == $cnewpass){
      
      $sql1 = mysqli_query($con, 'UPDATE tbl_login SET password="'. md5($_POST['passname2']).'" WHERE login_id="'.$_SESSION['id'].'" ');
      $error = "<center><h4><font color='green'>Password successfully changed!</h4></center></font>";
        redirectTo('index.php');
      }
      else {
      	$error = "<center><h4><font color='#FF0000'>New Password and Confirm Password does not match!</h4></center></font>";
      	
      }
    }
  }
  else {
  	$error = "<center><h4><font color='#FF0000'>Error!</h4></center></font>";
  	
  }
}
  ?>
</body>
