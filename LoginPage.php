<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="icon" type="image/png" href="Assets/LOGO/LOGO.png" />
	<link rel="stylesheet" href="CSS/All.css">
	<link rel="stylesheet" href="CSS/MijnApo.css">
	<script src="JS/ActiveNav.js"></script>
</head>

<body>
	<header>
		<?php include 'PHP/Header.php' ?>
	</Header>

	<main>
		<!-- Register -->
		<section>
			<?php require_once 'PHP/messages.php' ?>
			<form name="Register" action="PHP/Register.php" method="post" required>
				firstname: <input type="text" name="firstname">
				<br>
				infixes: <input type="text" name="infixes">
				<br>
				lastname: <input type="text" name="lastname">
				<br>
				Email: <input type="email" name="email">
				<br>
				Password: <input type="password" name="password">
				<br>
				Confirm password: <input type="password" name="password_confirm">
				<br>
				<input type="submit" name="submit" value="Register">
			</form>
		</section>
		<!-- Register -->
		<!-- Login -->
		<section>
			<form name="Login" action="PHP/Login.php" method="post" required>
				Email: <input type="email" name="email">
				<br>
				Password: <input type="password" name="password">
				<br>
				<input type="submit" name="submit" value="Login">
			</form>
		</section>
		<!-- Login -->
	</main>
</body>

</html>