<html>
<head>
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	<script>
		function slide(id)
		{
			var img = ['images/lpu1.jpg','images/lpu2.jpg','images/lpu3.jpg','images/lpu4.jpg','images/lpu5.jpg','images/lpu6.jpg'];
			document.getElementById("image");
			image.src=img[id];
			if(id >= 5)
			{
				id = 0;
			}
			id++;
			setTimeout("slide("+id+")",1000);
		}
	</script>
</head>
<body onload="slide(0)">
<?php
include('header.php');
?>
	<div class="ban">
		<img src="images/banner.jpg" id="image" width="100%" height="400px">
	</div>
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
	<div class="content">
		<div class="part-1">
			<h1>OUR UPDATES</h1><hr>
			<div class="part-1-one">
				<p style="font-weight:bold;">New Product</p>
				<p style="color:;">We will provide latest items which will be useful in our everyday life like electronics, pillows, matress, dresses, footwears.</p>
			</div>
			<div class="part-1-one">
				<p style="font-weight:bold;">Best Price</p>
				<p style="color:;">Our aim to provide you a item in the best price which will support you economically.</p>
			</div>
			<div class="part-1-one">
				<p style="font-weight:bold;">Convinent</p>
				<p style="color:;">You can easily sell or buy your item within a campus which will be easy and convinent for you.</p>
			</div>
		</div>
		<div class="part-2">
			<h1>WHAT WE OFFER?</h1><hr>
			<div class="part-2-one">
				<p><b>Buy: Buy second hand products on our website at affordable prices.</b></p><br>
				<p style="color:;">Simple Steps:
				<ol type="1">
				<li>Search: The product you need.</li>
				<li>Select: The product you like.</li>
				<li> Request:Send us request.</li>
				<li> Visit: Our Store and see the product.</li>
				<li> Buy: Pay the product.</li></ol></p>
			</div>
			<div class="part-2-one">
			<p><b>Sell: Sell your stuff by giving us information about the products you want to sell and get good price. We take care of the rest.</b></p>
				<p style="color:;margin-top:30px">Simple Steps:
				<ol type="1">
				<li>Register: Make your account.</li>
				<li>Upload: Send us product details with pictures in a specified format.</li>
				<li>Visit: visit our store to submit your product.</li>
				<li>Get paid!!</li>
				</ol></p>
			</div>
			<div class="part-2-one">
			<p><b>Advertise: Advertise your business on our website and reach more customers.</b></p><br>
				<p style="color:;">Simple Steps:
				<ol type="1">
				<li>Send us information.</li>
				<li>Send us relevant ad and pictures.</li>
				<li> Make payments.</li>
				<li> Wait for  your ad to show online.</li>
				</ol></p>
			</div>
		</div>
		<div class="gal">
			<h1><span style="margin-left:100px">ONLINE MARKET PLACE</h1></span><hr>
			<div class="pic1">
				<img src="images/pic1.jpg" width="100%" height="160px;">
				<p style="text-align:justify;">"Every once in a while, a new technology, an old problem, and a big idea turn into an innovation."</p>
			</div>
			<div class="pic1">
				<img src="images/pic2.jpg" width="100%" height="160px;">
				<p style="text-align:justify;">"Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do."</p>
			</div>
			<div class="pic1">
				<img src="images/pic3.jpg" width="100%" height="160px;">		
				<p style="text-align:justify;">“Training gives us an outlet for suppressed energies created by stress and thus tones the spirit just as exercise conditions the body.”</p>
			</div>
			<div class="pic1">
				<img src="images/pic4.jpg" width="100%" height="160px;">		
				<p style="text-align:justify;">"The only rule is don't be boring and dress cute whenever you go. Life is too short to blend in."</p>
			</div>
		</div>
	</div>
	<div class="footer">
	</div>
</body>
</html>