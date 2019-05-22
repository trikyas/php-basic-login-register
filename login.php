<?php
	$msg = "";
	if (isset($_POST['submit'])) {
		require('db.php');
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$sql = $con->query("SELECT id, password FROM users WHERE email='$email'");
		if ($sql->num_rows > 0) {
		    $data = $sql->fetch_array();
		    if (password_verify($password, $data['password'])) {
						header('Location: home.php');
            } else
			    $msg = "<p class='btn alert-warning'>Please check your information!</p>";
        } else
            $msg = "<p class='btn alert-danger'>Please check your information!</p>";
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="images/logo.png"><br /><br />
								<a class="btn btn-warning" href="register.php">Register Now!</a>
								<br />
								<br />
<!-- PHP -->
				<?php if ($msg != "") echo $msg . "<br /><br />"; ?>
<!-- PHP -->
				<form method="post" action="login.php">
					<input class="form-control" name="email" type="email" placeholder="Email..."><br />
					<input class="form-control" minlength="5" name="password" type="password" placeholder="Password..."><br />
					<input class="btn btn-primary" name="submit" type="submit" value="Login Now!"><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
