<?php
include("db.php");
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=($_POST['password']);
$number=$_POST['number'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$check="select id from register where email='$email'";
$r=mysqli_query($con,$check);
if($con->affected_rows>0)
{
	echo "<script language='javascript'>alrt('you are already register');</scirpt>";
	echo "<script language='javascript'>window. location.href=('http://localhost/yoga/login.php');</script>";
	
}
else
{
$query="insert into register(name,lastname,email,password,number,gender,dob)
values ('$name','$lastname','$email','$password','$number','$gender','$dob');";
$rs=mysqli_query($con,$query);
if($rs)
{
echo"record inserted";
header("Location:http://localhost/yoga/front2.php");
}
else
{
echo"error",mysqli_error($con);
}
echo "<script language='javascript'>alrt('welcome to ower website');</scirpt>";
echo "<script language='javascript'>window. location.href=('http://localhost/yoga/front2.php');</script>";
}
?>