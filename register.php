<?php
	include'connection.php';
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];
		$confirm_pass= $_POST['confirm_pass'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$gender =isset($_POST['gender']);
		$dates =  date('d/m/y h:i:s A');
			
		$isview =0;

		$query = "insert into registration(`name`,`pass`,`confirm_pass`,`email`,`mobile`,`gender`,`isactive`,`datetime`) values
						('$name','$password','$confirm_pass','$email','$mobile','$gender','$isview','$dates')";
		$res=mysqli_query($con,$query);
		if($res)
		{
			$msg = "Successfully Inserted";
		}
		else
		{
			$msg ="Error Found";
		}
		echo '<script>alert("'.$msg.'")</script>';
	}
?>	
<html>
<head>
<style type="text/css">
body{background-image:url('images/side2.jpg');}
.footer{ background:black ;height:50px; width:100%;margin-top:8%;}
</style>
<script type="text/javascript"> 
function valid()                                 
{ 
    var name = document.forms["RegForm"]["name"];
    var password = document.forms["RegForm"]["password"];               
    var confirm_pass = document.forms["RegForm"]["confirm_pass"];               	
    var email = document.forms["RegForm"]["email"];    
    var mobile = document.forms["RegForm"]["mobile"];  
    var gender =  document.forms["RegForm"]["gender"];    
   
    if (name.value == "")                                
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
   
    if (password.value == "")                               
    { 
        window.alert("Please enter your password."); 
        password.focus(); 
        return false; 
    } 
	if (confirm_pass.value != password.value )                               
    { 
        window.alert("Please enter correct confirm password."); 
        confirm_pass.focus(); 
        return false; 
    } 
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
   /* if (mobile.value != 10)                           
    { 
        window.alert("Please enter your valid mobile number."); 
        mobile.focus(); 
        return false; 
    } 
   if (gender.value == "")                                   
    { 
        window.alert("Please enter your gender."); 
        gender.focus(); 
        return false; 
    }*/
	
	return true; 
}</script> 
</head>
<body>

<?php
	include_once('header.php');
?>
<br><br><fieldset style="width:500px;padding:10px; height:400px; margin:0 auto;">
		<legend><b>Registration Form</b></legend>
		<form  name="RegForm" onsubmit="return valid()" action="" method="post" enctype="multipart/form-data">
		  

		<table cellspacing="15px">
			<tr><td>Username</td><td><input type="text" name="name"/></td></tr>
			<tr><td>Password</td><td><input id="pass" type="password" name="password"></td></tr>
			<tr><td>Retype-Password</td><td><input id="pass" type="password" name="confirm_pass"/></td></tr>
			<tr><td>Email</td><td><input type="text" name="email"/></td></tr>
			<tr><td>Mobile</td><td><input type="text" name="mobile"/></td></tr>
			<tr><td>Gender</td><td><input type="radio" value="male" name="gender"/>Male &nbsp; <input type="radio" value="female" name="gender"/>Female<td></tr>
			<tr><td><input type="submit"  class="btn" name="submit" value="submit" /></td></tr>
		</table>
		<a href="login.php" class="btn" >Already have an Account</a>
		</fieldset>
</form>
<div class="footer"></div>

</body>
</html>
