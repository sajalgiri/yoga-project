<html>
<head>
<style>
*{
	margin:0px;
	padding:0px;
	}
.container
{
	width:100%;
	min-height:100px;
}
.header{
	height:100px;
	background-color:skyblue;
	font-style:Calligraphic;
	font-size:200%;
	text-align:center;
}
ul{	
text-align:center;
font-size:200%;
font-style:cooper black;
padding:0px;
margin:0px;

}
a{
text-decoration:none;
}
li{
display:block;
width:150px;
float:left;
}
.catdiv{
	height:240px;
	background-color:orange;
 }
.itemdiv{
	height:150px;
	width:250px;
	float:left;
	margin:20px;
}
p{
	font-weight:bold;
	font-size:20px;
	margin:13px;
	padding:10px;
}
.imgclass{
	height:150px;
	width:150px;
	padding:10px;
	border-radius:15%;
	box-shadow: 5px 10px;
}
#unamediv{
position:absolute;
left:1200px;
top:105px;
font-family:cursive;
}
</style>
</head>
<body>
<div class="container">
	<div class="header">
	<h1><img src="logo3.jpg" height=100px; width=100px; align="left">Yoga Anonymous</h1> 
	</div>
	<div id='unamediv'>
		<h3 style="font-size: 30px;">
		<?php 
		session_start();
		if(isset($_SESSION['id']))
		{
		echo "Welcome ".$_SESSION['username'];
		}
		?>
		</h3>
		</div>
		<?php
	include "hedder.php";
	?>
	</div>
	<div class="pic">
	<img src="vriksasan.jpg" height=600px; width=1520px;>
	<div class="catdiv">
	<?php
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"yoga");
		$query="select * from yoga";
		$catrows=mysqli_query($con,$query);

		if(mysqli_num_rows($catrows)>0)
		{
			while($row=mysqli_fetch_assoc($catrows))
			{
		
			echo "<div class='itemdiv'>";
			echo "<a href='pose.php?yogaid=".$row['yogaid']."'><img src='".$row['picname']."' class='imgclass'></a>";
			echo "<a href='pose.php?yogaid=".$row['yogaid']."'><p>&nbsp;&nbsp;".$row['yoga asan']."</p></a>";
			echo "</div>";
			}
		}
	?>
</div>
</div>
</body>
</html>
