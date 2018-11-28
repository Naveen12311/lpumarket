<html>
<head>
	<link href="css/style4.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include('header.php');
include('Connection.php');
if(isset($_POST['submit']))
	{
		$title = $_POST['title'];
		
		$dates =  date('d/m/y h:i:s A');
		
		$isactive  = 1;
		$msg = "";
		$query = "insert into sell(title,datetime,isactive)values
		('$title','$dates','$isactive');";
		$res=mysqli_query($con,$query);
		if($res)
		{
			$msg = "Successfully Inserted";
		}
		else
		{
			$msg ="Error Found";
		}
		echo '<script>alert("'.$query.'")</script>';
				echo '<script>alert("'.$msg.'")</script>';

	}
?> 
	<div class="items">
		<ul class="one">
			<li><a href="#">STATIONARY</a></li>
			<li><a href="#"><img src="images/home.png"></a></li>
			<li><a href="#"><span style="font-size:16px;">10% OFF ANY RESERVATION<br>WEEKENDS OR WEEKDAYS</span></a></li>
		</ul>
		<ul class="one">
			<li><a href="#">ELECTRONICS</a></li>
			<li><a href="#"><img src="images/phone.png"></a></li>
			<li><a href="#"><span style="font-size:16px;">10% OFF ANY RESERVATION<br>WEEKENDS OR WEEKDAYS</span></a></li>
		</ul>
		<ul class="one">
			<li><a href="#">CLOTHES</a></li>
			<li><a href="#"><img src="images/man.png"></a></li>
			<li><a href="#"><span style="font-size:16px;">10% OFF ANY RESERVATION<br>WEEKENDS OR WEEKDAYS</span></a></li>
		</ul>
	</div>
	<div class="form-right">
		<h2>INFORMATION :</h2><br>
		<p><span style="color:#969C04">Lovely Professional University,</span></p>
		<p><span style="color:#969C04">Jalandhar -Delhi G.T. Road,</span></p>
		<p>Phagwara, Punjab 144411</p>
		<p>Phone:(00) 222 666 444</p>
		<p>Fax: (000) 000 00 00 0</p>
		<p>Email: lpumarketplace@gmail.com</p>
		<p><span style="color:#969C04">Follow on: Facebook, Twitter</span></p>
		
	</div>
	<div class="form-left">
		<h2>Feedback</h2>
		<form method="post" enctype="multipart/form-data">
	<textarea rows="15" cols="80" name="title"></textarea><br><br><br>
	
	<input type="submit" name="submit"/>
</form>

	</div>
	<div class="footer">
		
	</div>
			
</body>
</html>