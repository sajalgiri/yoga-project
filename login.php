<html>
<head>
<style>
*{
	margin:0px;
	padding:0px;
	}
.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>
<div class="container">
<?php
include "hedder.php";
?>
<img src="bg1.jpg" height=695px; width=1540px;>
<div class="centered">
<form action="http://localhost/yoga/loginlogic.php" method="post">
Email id:
<input type="text" name="ename" placeholder="Enter Your Email id"><br><br>
Password:
<input type="password" name="pass" placeholder="Enter Your password"><br><br>
<input type="submit" name="login" value="login">
<input type="reset" name="reset"><br><br>
</form>
</div>
</body>
</html>


