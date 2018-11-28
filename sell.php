<?php
   include('Connection.php');
	if(isset($_POST['submit']))
	{
		$title = $_POST['title'];
		
		$dates =  date('d/m/y h:i:s A');
		$url =$_FILES['filetoupload']['name'];
		$t_loc = $_FILES['filetoupload']['tmp_name'];
		$imageurl ="uploads/".$url;
		$isactive  = 1;
		$msg = "";
		$query = "insert into sell(title,imageurl,datetime,isactive)values
		('$title','$imageurl','$dates','$isactive');";
		$res=mysqli_query($con,$query);
		if($res)
		{
			$msg = "Successfully Inserted";
			move_uploaded_file($t_loc,$imageurl);
		}
		else
		{
			$msg ="Error Found";
		}
		echo '<script>alert("'.$query.'")</script>';
				echo '<script>alert("'.$msg.'")</script>';

	}

   ?>
<html>
<head>
<style type="text/css">
.center{ width:972px; height:400px; background:#f1f1f1; padding:50px; border:3px solid #ccc; float:right;}
</style>
</head>
<body>

<div class="center">  
<form method="post" enctype="multipart/form-data">
	<br><br>Title<br> <textarea rows="2" cols="100" name="title"></textarea><br><br>
	
	<br><br><tr><td>Upload File</td><td><input type="file" name="filetoupload"></td></tr>
	<input type="submit" name="submit"/>
</form>
</div>
</body>
		
</html>   

