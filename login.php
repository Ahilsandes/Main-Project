<?php
session_start();
include("dbconnection.php");


$username=$_POST["uname"];
$password=md5($_POST["pass"]);


$sql="select * from tbl_login where username='$username' and password='$password' and status='1'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
	while($row=mysqli_fetch_array($result))
	{

		$_SESSION['role']=$row['role'];
		if($row['role']=='user')
		{	$_SESSION['id']=$row['login_id'];
			$_SESSION['uname1']=$username;
			header("location:user-index.php");

		}
		if($row['role']=='admin')
		{
			$_SESSION['id']=$row['login_id'];
			$_SESSION['uname1']=$username;
			header("location:admin-index.php");
		}

		if($row['role']=='gardner')
		{
			$_SESSION['id']=$row['login_id'];
			$_SESSION['uname1']=$username;
			header("location:gardner-index.php");
		}
	}


}
else
{

echo"incorrect credentials";
}


mysqli_close($con);
?>
