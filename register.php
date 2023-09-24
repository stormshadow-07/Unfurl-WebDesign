<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>unfurl-Sign Up</title>
  <link rel="stylesheet" type="text/css" href="cssform/style.css">
  <link rel='stylesheet' href='https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:500,700&amp;display=swap'>
</head>
	<body>
		
		<form method="post" action="register.php">
		
			<div class="segment">
				<h1>Sign up</h1><p>Already Sign Up? <a href="login.php" style=" color: #0ABAB5;">Sign in</a></p>
				<?php include('errors.php'); ?>
			</div>
			
			
			<div class="">
				<label>
					<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
				</label>
			</div>
			<div class="">
				<label>
				<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
				</label>
			</div>
			<div class="">
				<label>
				<input type="password" name="password_1" placeholder="Password">
				</label>
			</div>
			<div class="">
				<label>
				<input type="password" name="password_2" placeholder="Confirm password">
				</label>
			</div>
			<button class="red" type="submit" name="reg_user"><i class="icon ion-md-lock"></i> Sign Up</button>
		</form>
	</body>
</html>