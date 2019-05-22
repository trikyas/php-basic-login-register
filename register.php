<?php
	$msg = "";
	if (isset($_POST['submit'])) {
		require('db.php');
		$name = $con->real_escape_string($_POST['name']);
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);
		if ($password != $cPassword)
			$msg = "<p class='btn alert-warning'>Please Check Your Passwords!</p>";
		else {
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$query = mysqli_query($con, "SELECT * FROM users WHERE email='".$email."'");
    if (!$query) {
        die('Error: ' . mysqli_error($con));
    }
		if(mysqli_num_rows($query) > 0){
			$msg = "<p class='btn alert-warning'>Email is already in use!</p>";
		}else {
			$con->query("INSERT INTO users (name,email,password) VALUES ('$name', '$email', '$hash')");
			// $msg = "You have been registered!";
			header('Location: login.php');
		}
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="images/logo.png">
				<br />
				<br />
				<a class="btn btn-warning" href="login.php">Already a Member</a>
				<br />
				<br />
<!-- PHP -->
				<?php if ($msg != "") echo $msg . "<br /><br />"; ?>
<!-- PHP -->
				<form method="post" action="register.php">
					<input class="form-control" minlength="3" name="name" placeholder="Name">
					<br />
					<input class="form-control" name="email" type="email" placeholder="Email">
					<br />
					<input class="form-control" minlength="5" name="password" type="password" placeholder="Password">
					<br />
					<input class="form-control" minlength="5" name="cPassword" type="password" placeholder="Confirm Password">
					<br />
					<input class="btn btn-primary" name="submit" type="submit" value="Register Now!">
					<br />
				</form>
				<br />
			</div>
		</div>
	</div>
</body>
</html>
