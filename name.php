<html>
<head>
<style type="text/css">
body{
	margin:0;
}
.header{
	background:#969C04;
	height:200px;
}
.right{
	float:right;
	list-style:none;
	margin:0;
	padding:0;
}
.right li{
	margin-top:34px;
}
.first{
	text-decoration:none;
	padding:15px 30px;
	color:white;
	margin-left:205px;
	background:#747902 ;
	font-size:20px;
}

.ser{
	width:75%;
	outline:none;
	border:none;
	height:40px;
	margin-left:80px;
	border-radius:4px;
	border:1px solid black;
}
.left{
	padding:1%;
}
.box{
	height:70px;
	background:black;
}
.icon{
	margin:0;
	float:right;
	list-style:none;
	margin-right:16px;
}
.icon li{
	float:left;
	margin-left:20px;
	margin-top:20px;
}
.icon li a:hover{
	opacity:0.6;
}
.menu{
	margin:0;
	float:left;
	list-style:none;
	margin-right:;
}
.menu li{
	float:left;
	margin-right:40px;
}
.menu li a{
	text-decoration:none;
	color:white;
	line-height:70px;
	font-size:19px;
}
.ban{
	height:350px;
	background:;
	width:100%;
}
	.login { width:10%; margin:20px 30px; height:20px;float:right;}

</style>
</head>
<body>
<div class="header">
		<li>
		<div class="login">
		<?php
			if(!isset($_SESSION['user']))
			{
				echo"<a href='login.php' class='btn'>LogIn</a>";
			}
			else
			{
				echo"Welcome <a href='dashboard.php' >". $_SESSION['user']."</a><br><br> <a href='logout.php' class='btn'>Logout</a>";
			}
		?> 
		</div></li>
		
	</ul>
	<div class="left">
		<img src="images/1.jpg">
	</div>
</div>	
<div class="box">
	<ul class="icon">
			<li><a href="#"><img src="images/facebook.png"></a></li>
			<li><a href="#"><img src="images/twitter.png"></a></li>
			<li><a href="#"><img src="images/feed.png"></a></li>
		</ul>
		<ul class="menu">
			<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
</div>

	<body>
	</html>