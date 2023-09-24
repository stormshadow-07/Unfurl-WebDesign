<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
	<title>Unfurl-Log In</title>

	<link rel="stylesheet" type="text/css" href="cssform/style.css">
	<link rel='stylesheet' href='https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:500,700&amp;display=swap'>
	
	</head>
		<body>
			<form method="post" action="login.php">

				<div class="segment">
					<h1>Log In</h1><p>Not Sign Up? <a class="link"href="register.php">Sign up</a></p>
					<?php include('errors.php'); ?>
				</div>
				

				<div class="">
					<label>
						<input type="text" name="username" placeholder="Username" >
					</label>
				</div>

				<div class="">
					<label>
					<input type="password" name="password" placeholder="Password">
					</label>
				</div>
				<div class="">
					<button class="red" type="submit" name="login_user"><i class="icon ion-md-lock"></i>Log In</button>
				</div>

			</form>
		</body>
</html>