<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="icon" type="image/png" href="Assets/LOGO/LOGO.png" />
	<link rel="stylesheet" href="CSS/All.css">
	<link rel="stylesheet" href="CSS/LoginPage.css">
	<script src="JS/ActiveNav.js"></script>
</head>

<body>
	<header>
		<?php include 'PHP/Header.php' ?>
	</Header>

	<main>
		<section>
			<?php require_once 'PHP/messages.php' ?>
		</section>

		<!-- Login -->
		<section id="account">
			<div id="Login">
				<h2>Login</h2>
				<form name="Login" action="PHP/Login.php" method="post" required>
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" name="submit" value="Login">
				</form>
			</div>
			<!-- Login -->
			<!-- Register -->
			<div id="SignUp">
				<h2>Sign Up</h2>
				<form name="Register" action="PHP/Register.php" method="post" required>
					<input type="text" name="firstname" placeholder="firstname">
					<input type="text" name="infixes" placeholder="infixes">
					<input type="text" name="lastname" placeholder="lastname">
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<input type="password" name="password_confirm" placeholder="Confirm password">
					<input type="submit" name="submit" value="Register">
				</form>
			</div>
		</section>
		<!-- Register -->
	</main>
</body>

</html>