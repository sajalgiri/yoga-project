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
.yogadiv{
	margin:auto;
	width:40%;
	height:auto;
	padding:10;
	border-radius:30px;
	background-color:yellow;
	margin-top:10px;
	font-size:20px;
	margin-bottom:10px;
}
p{
	font-weight:bold;
	font-size:20px;
	margin:13px;
	padding:10px;
	color:blue;
}
.picture{
height:500px;
width:500px;
margin-left:45px;	
border-radius:110px;
}
</style>
</head>
<body>
<div class="container">
	<div class="header">
	<h1><a href="front2.php"><img src="logo3.jpg" height=100px; width=100px; align="left">Yoga Anonymous</h1></a> 
	</div>
		<?php
	include "hedder.php";
	?>
	</div>
	<div class="pic">
	
	<?php
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"yoga");
		$query="select * from asan where id=".$_GET['id'];
		$catrows=mysqli_query($con,$query);

		if(mysqli_num_rows($catrows)>0)
		{
			while($row=mysqli_fetch_assoc($catrows))
			{
		
			echo "<div class='yogadiv'>";
			echo "<a href='details.php?id=".$row['id']."'><img src='".$row['asanpic']."' class=picture></a>";
			echo "<a href='details.php?id=".$row['id']."'><p>".$row['asanname']."</p></a>";
			echo "<hr>";
			echo "<a href='details.php?id=".$row['id']."'><p>&nbsp;&nbsp;".$row['steps']."</p></a>";
			echo "<br><br>";
			echo "<iframe width='600' height='480' src='".$row['videolink']."' frameborder='0' allowfullscreen></iframe>";
			echo "<a href='details.php?id=".$row['id']."'><p>&nbsp;&nbsp;".$row['benefits']."</p></a>";
			echo "</div>";
			}
		}
	?>
</div>
</div>
</body>
</html>
