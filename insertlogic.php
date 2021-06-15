<?php 
include("db.php");
$yogaid =$_POST['yogaid'];
$asanname =$_POST['asanname'];
$asanpic=$_POST['asanpic'];
$steps=$_POST['steps'];
$benefits =$_POST['benefits'];
$videolink =$_POST['videolink'];
echo("=======>"+yogaid);
$check="select id from asan where asanname='$asanname'";
$res=mysqli_query($con,$check);
if(mysqli_affected_rows($con)>0)
{
echo "<script language='javascript'>alert('this recipe is alrady there');</script>";
echo "<script language='javascript'>window.location.href='http://localhost/yoga/insertitem.php';</script>";
}
else
{
$query="insert into asan(yogaid,asanname,asanpic,steps,benefits,videolinks)values ($yogaid,'$asanname','$asanpic','$steps','$benefits','$videolink')";
echo "<script language='javascript'>alert('".$query."');</script>";

if(mysqli_query($con,$query))
{
echo "<script language='javascript'>alert('record inserted');</script>";
}
else
{
echo"record cannot be inserted".mysqli_error($con);
}
	
}
?>