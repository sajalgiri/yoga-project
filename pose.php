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
	height:auto;
	background-color:skyblue;
 }
 
.itemdiv{
	margin:auto;
	height:400px;
	width:60%;
	padding:10px;
	border-radius:10px;
	margin-bottom:10px;

}
p{
	font-weight:bold;
	font-size:20px;
	margin:13px;
	padding:10px;
	text-align:center;
}
.imgclass{
	height:250px;
	margin-left:300px;
	width:250px;
	padding:10px;
	border-radius:15%;
	box-shadow: 5px 10px;
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
	<div class="catdiv">
	<?php
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"yoga");
		$query="select * from asan where yogaid=".$_GET['yogaid'];
		$catrows=mysqli_query($con,$query);

		if(mysqli_num_rows($catrows)>0)
		{
			while($row=mysqli_fetch_assoc($catrows))
			{
		
			echo "<div class='itemdiv'>";
			echo "<a href='details.php?id=".$row['id']."'><img src='".$row['asanpic']."' class='imgclass'></a>";
			echo "<a href='details.php?id=".$row['id']."'><p>".$row['asanname']."</p></a>";
			echo "</div>";
			}
		}
	?>
</div>
</div>
</body>
</html>
