<?php
session_start();
include("db.php");
$email=$_POST['ename'];
$password=$_POST['pass'];
$query="select * from register where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0)
{
	$row=mysqli_fetch_assoc($res);
	$_SESSION['id']=$row['id'];
	$_SESSION['username']=$row['name'];
	$row=mysqli_fetch_assoc($res);
	echo "<script language='javascript'>alert('login successful');</script>";
	echo "<script language='javascript'>window.location.href='http://localhost/yoga/front2.php';</script>";
	//header("Location:http://localhost/yoga/login.php");
}
else
{
	echo "<script language='javascript'>alert('your email and password are incorrect');</script>";
	echo "<script language='javascript'>window.location.href='http://localhost/yoga/login.php';</script>";
}
?>