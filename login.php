<?php
session_start();
include('connection.php');  
if(!empty($_POST['login'])) 
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$msg = "";
	$query = "select * from registration where email='$user' and pass='$pass'";
	$result = mysqli_query($con,$query);
	$row = mysqli_num_rows($result); //retrieve the number of rows
	
	if($row==1)
	{
		$_SESSION['user'] =$user;
		header("location: dashboard.php");
	}
	else
	{
		$msg = $msg."Incorrect User Or Password";
				echo '<script>alert("'.$msg.'")</script>';

	}
}
?>
<html>
<head>
<style type="text/css">
body{background-image:url('images/side2.jpg');}
.footer{ background:black ;height:50px; width:100%;margin-top:15%;}
</style>
<script type="text/javascript">	
function Show()
{
	var xyz = document.getElementById("pass");
	if(xyz.type=='password')
	{
		xyz.type="text";
	}
	else
	{
		xyz.type="password";
	}
}
</script>
</head>
<body>
<?php
include_once('header.php');
?>
<form method="post">			
	<br><br><fieldset style="padding:30px; margin:0 auto; width:400px; ">
	<legend>LOGIN</legend>
			<table cellpadding="10px">
				<tr><td>USERNAME</td><td><input type="text" name="user"/></td></tr>
				<tr><td>PASSWORD</td><td><input id="pass" type="password" name="pass"/>
				<span onclick="Show()">Show</span></td></tr>
				<tr><td><input type="submit" name="login"/></td></tr>
				<tr><td></td><td><a href="register.php">Register a new User</a></td><tr>
			</table>
	</fieldset>
</form>
<div class="footer">
</div>
</body>
</html>