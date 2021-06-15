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
<form action="<?php echo'http://localhost/yoga/insertlogic.php';?>" method="POST">
<table align="left">
<tr>
<th>Yoga id :</th>
<td><select name="yogaid">
			<option value="1">Lotus Position</option>
			<option value="2">Hand Stand</option>
			<option value="3">Vriksasan</option>
			<option value="4">Salabhasana</option>
			<option value="5">Chakrasan</option>
		</select></td>
</tr>
<tr>
<th>Asan Name:</th>
<td><input type="text" name="asanname"></td></tr>
<tr>
<th>Asan Picture:</th>
<td><input type="text" name="asanpic"></td></tr>
<tr>
<th>Steps:</th>
<td><textarea name="steps" rows="15" cols="50"></textarea></td></tr>
<tr>
<th>Benefits:</th>
<td><textarea name="benefits"rows="10" cols="50"></textarea></td></tr>
<tr>
<th>Video Link:</th>
<td><input type="text" name="videolink"></td></tr>
<tr>
<td><input type="button" name="insert" value="Insert">
</td></tr>
</table>
</form>
</div>
</body>
</html>