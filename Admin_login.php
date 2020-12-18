<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<style>
body
{background-color:rgb(157, 205, 255);
}
</style>
<body>
	
	<center>
		<h2>ATTENDENCE MANAGER</h2>
		<div>
		 <img src="VesitLogo.png">
		 <br>
		 </div>
		<form method="POST">
			<div>
			<br><br>
			<img src="Admin.jpg"; height=100px; width=100px;>
			<p>admin login</p>
			</div>
			<div>
				<br>
				<label for="Email">VES Mail:</label>
				<input type="Email" name="VES Mail" id="email" placeholder="name.surname@ves.ac.in" required="Please fill this">
			</div>
			<div>
			    <br>
				<label>Password:</label>
				<input type="Password" name="Password" placeholder="password" required="please fill this">
				
			</div>
			<br>
			<input type="submit" name="Login" value="LOGIN">
		</form>
		<br>
		<br>
		<marquee style="background-color: YELLOW; color:RED; font-size:200%">Please fill with your VESIT email id</marquee>
    
</center>
<?php
include 'connection.php';

if(isset($_POST['Login']))
{	$email=$_POST['VES_Mail'];
	$pass=$_POST['Password'];
	$select="select email,password from admin_data where email= '$email' AND password ='$pass';";
$ros=mysqli_query($con,$select);
$rows=mysqli_num_rows($ros);
if($rows>0)
{
	echo "<script>alert('login succesful');</script>";
	header("Location:http://localhost/project/homepage_admin.php");
}
else
{

	echo "<script>alert('login unsuccesful check credentials');</script>";
}
}?>
</body>

</html>
