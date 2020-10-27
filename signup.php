<?php

	require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>signup page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="iotproject.css" type="text/css">
	
	
</head>
<body>
	<form action="signup.php" method="POST">
	<div class="container">
	 <div class="login-form">
		<h2>Enter Data to register </h2>
	 </div>
		
	<div class="input-fields">
		
		<input type="text" placeholder="Username" class="form-control" name="username" id="user" required>	
		<input type="text" placeholder="Email" class="form-control" name="email" id="user-input"required>
		<input type="password" placeholder="password" class="form-control" name="password" id="pwd" required>
		<input type="password" placeholder="confirm password" class="form-control" name="cpassword" id="cpwd" required>
		<div class="page-btn">
		<button name="submit-btn" type="submit" id="submit" value="signup">Signup</button>
		<button type="submit" id="register">Already registered?<a href="Login.php">Login</a></button>
		</div>
		
</div>
</form>
<?php
	if(isset($_POST['submit-btn'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if($password == $cpassword){
			$query = "select * from usetinfotable WHERE email = '$email'";
			$query_run = mysqli_query($con,$query);

			if (mysqli_num_rows($query_run)>0) {
				echo '<script type = "text/javascript"> alert("user already exit.")</script>';
			}
			else{
			
				$query = "insert into usetinfotable values('' ,'$username','$email','$password')";
				$query_run = mysqli_query($con,$query);
				if ($query_run) {
					echo '<script type="text/javascript"> alert("User registered, goto login page.")</script>';
				}
				else {
					echo '<script type="text/javascript"> alert("Error.")</script>';
				}
			}
		}
		else {
			echo '<script type="text/javascript"> alert("password and confirm password doesnot match .")</script>';
		}
	}


?>
</body>
</html>