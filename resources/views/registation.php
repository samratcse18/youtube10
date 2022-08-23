<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<style>
		*{
	margin: 0;
	padding: 0;
	font-size:40px;
	
}
div{
	
	width: 600px;
	height: 400px;
	margin-left:500px;
	margin-top:100px;
}
body{
	background-color:blue;
}
		</style>
	</head>
	<body>
	<div >
		<form method="post" action="register.php">
			<label>Name:</label>
			<input type="text" name="name" placeholder="Enter Your Name"/></br></br>
				<label>Email Id:</label>
			<input type="email" name="email" placeholder="Enter Your Valid Email"/></br></br>
			<label>Password:</label>
			<input type="password" name="password" placeholder="Enter Your Password"/><br></br>
		
			<label>Gender:</label>
			Male<input type="radio" name="gender" value="Male"/>
			Female<input type="radio" name="gender" value="Female"/></br></br>
			<input type="submit" name="register_button" value="Register"/></br></br>
		</form>
		</div>
		<?php
			if(isset($_POST['register_button']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$gender=$_POST['gender'];
				//echo '<script>alert("Name is: '.$name.' Email is: '.$email.'")</script>';
				$conn=mysqli_connect("localhost","root","","web_club_sql");
				$query="INSERT INTO user(name,email,password,gender) VALUES('$name','$email','$password','$gender')";
				if(mysqli_query($conn,$query)){
					echo '<script>alert("Registration Successfully Completed ")</script>';
				}
				else
				{
					echo '<script>alert("Problem ase Boss!!")</script>';
				}
			}
		
		?>
	</body>
</html>