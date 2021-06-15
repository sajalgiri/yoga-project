<?php
session_start();
if(isset($_SESSION['username']))
{
	session_unset();
	session_destroy();
		echo "<script language='javascript'>alert('logout successful');</script>";
	echo "<script language='javascript'>window.location.href='http://localhost/yoga/login.php';</script>";
}
?>