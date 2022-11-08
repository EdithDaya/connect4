<!DOCTYPE html>
<html>
<head>
	<title>Login/SignUp</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="container">
		<div class="loginbox">
		<div class="row">
			<div class="left">
				<h2><b> Login </b> </h2>
				<form action="validation.php" method="post">
					<div class="form">
						<label>Username</label>
						<input type="text" name="user" class="formleft" required>
					</div>
					<div class="form">
						<label>Password</label>
						<input type="text" name="Password" class="formleft" required>
					</div>
		<button type="submit" class="button"> LOGIN </button>

				</form>
				<br>
			</div>
			<div class="right">
				<h2><b> Register </b> </h2>
				<form action="registration.php" method="post">
					<div class="form">
						<label>Username</label>
						<input type="text" name="user" class="formleft" required>
					</div>
					<div class="form">
						<label>Password</label>
						<input type="text" name="Password" class="formleft" required>
					</div>
		<button type="submit" class="button"> REGISTER</button>

				</form>
				
			</div>
		</div>