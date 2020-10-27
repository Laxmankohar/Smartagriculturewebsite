<?php
	require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="iotproject.css" type="text/css">
	
	
	
</head>
<body>
	<form action="Login.php" method="POST">
		<div class="container">
	 <div class="login-form">
		<h2>Login here</h2>
	 </div>
		
	<div class="input-fields">
		<input type="text" placeholder="Email" class="form-control" name="email" id="user-input"required>
		<input type="password" placeholder="password" class="form-control" name="password" id="pwd" required>
		<button name="login" class="log-in">Log-in</button>
		<div class="other">
			<button class="sign-up"><a href="signup.php">SignUp</a></button>
		</div> 
</div>
</form>
<?php
if(isset($_POST['login'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
		$query = "select * from usetinfotable WHERE email = '$email' AND password = '$password'";
		$query_run = mysqli_query($con,$query);

		if (mysqli_num_rows($query_run)>0) {
			$_SESSION['email'] = $email;
		
			header('Location:homepage.php');
		}
		else{
		
			echo '<script type = "text/javascript"> alert("invalid credentials")</script>';
		}
}
?>
</body>
</html>