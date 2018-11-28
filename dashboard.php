<?php
session_start();
if(!isset($_SESSION['user']))
{
	die();
	header('login.php');
}

include('Connection.php');
$sessionvalue = $_SESSION['user'];
$id;
$query  = mysqli_query($con,"select *  from registration where email = '$sessionvalue'");
while($result = mysqli_fetch_assoc($query))
{
	$id = $result['id'];
}

include_once('name.php');
?>
<html>
<head>
<style type="text/css">
	body{ margin:0px;}
	.header{ height:150px; width:100%; background:#969C04;}

.options{padding:13.5px; width:18%; background:black; float:left; }
.options ul{margin:0; list-style:none; }
.options ul li { padding:3px 13px 3px 13px; background:silver;text-align:center; margin:3px;}
.options ul li a{text-decoration:none;   font-size:22px;color:#fff; }
.options ul li:hover{background:#1f1f1f; }
.options h1{background:grey; padding:10px; text-align:center; width:175px; margin-left:42px; color:#fff; }
.main_content{ width:80%; background:white;float:right;}
.username {float:right; width:200px; padding:20px;}
.content_header{background:black; height:50px; border-bottom:5px solid grey;}
.content_area{padding:25px 50px 25px 50px;background:#f1f1f1; border:3px solid #ccc; height:400px; width:1000px;}
.btn{border:none;outline:none;padding:10px 25px;color:white;background:black;}
</style>
</head>
<body>
<div class="options">
	<h1>BUY</h1>
	<ul>
		<li><a href="electronics.php">Electronics</a></li>
		<li><a href="clothes.php">Clothes</a></li>
		<li><a href="bikes.php">Bikes</a></li>
		<li><a href="matress.php">Bedding</a></li>
		<li><a href="stationary.php">Stationary</a></li>
		<li><a href="index.php">Others</a></li>
	</ul>
	<h1>SELL</h1>
	<ul>
		
		<li><a href="instruct.php">Instructions</a></li>
		<li><a href="upload.php">Upload_File</a></li>
	</ul>	
		
</div>
</body>
</html>