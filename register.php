<html>
<style>
*{
	margin:0px;
	padding:0px;
	}
.container {
  position: relative;
  text-align: center;
  color:white;
}
.register {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<head>
</head>
<body>
<div class="container">
<?php
include "hedder.php";
?>
<img src="rg.jpg" height=695px; width=1540px;>
<div class="register">
<form action="<?php echo 'http://localhost/yoga/registerlogic.php'; ?>" method="POST">
<table align="center">
<tr>
<th>Firstname:</th>
<td><input type="text" name="name"></td></tr>
<tr>
<th>Lastname:</th>
<td><input type="text" name="lastname"></td></tr>
<tr>
<th>Email:</th>
<td><input type="text" name="email"></td></tr>
<tr>
<th>Password:</th>
<td><input type="password" name="password"></td></tr>
<tr>
<th>Contact Number:</th>
<td><input type="number" name="number"></td></tr>
<tr>
<th>Gender:</th>
<td><input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other</td></tr>
<tr>
<th>Date Of Birth:</th>
<td><input type="date" name="dob"></td></tr>
<tr>
<td><input type="submit" name="submit">
<input type="reset" name="clear"></td></tr>
</table>
</form>
</div>
</body>
</html>