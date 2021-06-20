<?php

$con=mysqli_connect("localhost","root","","rosegardens") or die("couldn't connect");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone_no=$_POST['phone'];
$username=$_POST['uname'];
$password=md5($_POST['password']);
$role="user";

$sql1="insert into tbl_login(role,username,password,status) values('$role','$username','$password','1')";
        mysqli_query($con,$sql1);
        $n=mysqli_insert_id($con);
        $sql="insert into tbl_register(login_id,fname,lname,email,phone)values('$n','$fname','$lname','$email','$phone_no')";
        if(mysqli_query($con,$sql))
        {
                header("location:login.html");
            mysqli_close($con);
        }
		else
		{
			echo"error";
		}
?>
