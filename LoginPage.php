<?php
session_start();
if (!isset($_SESSION['first_name'])) {
} else {
	if ($_SESSION['user_level'] === 0) {
		header('Location: /apo_ahmad/MijnApo');
	}
	else{
		header('Location: /apo_ahmad/AdminPage');
	}
}
$page = 'LoginPage'
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="icon" type="image/png" href="/apo_ahmad/Assets/LOGO/LOGO.png" />
	<link rel="stylesheet" href="/apo_ahmad/CSS/All.css">
	<link rel="stylesheet" href="/apo_ahmad/CSS/LoginPage.css">
	<script src="/apo_ahmad/JS/ActiveNav.js"></script>
	<script src="/apo_ahmad/JS/showPassword.js"></script>
</head>

<body>
	<header>
		<?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad//PHP/inc/Header.inc.php' ?>
	</Header>

	<main>
		<section>
			<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad//PHP/inc/messages.inc.php' ?>
		</section>

		<!-- Login -->
		<section id="account">
			<div id="Login">
				<h2>Login</h2>
				<form name="Login" action="/apo_ahmad/PHP/Login.php" method="post" required>
					<input type="email" name="email" placeholder="Email">
					<input id="Loginpassword" type="password" name="password" placeholder="Password">
					<input type="submit" name="submit" value="Login">
				</form>
			</div>
			<!-- Login -->
			<!-- Register -->
			<div id="SignUp">
				<h2>Sign Up</h2>
				<form name="Register" action="/apo_ahmad/PHP/Register.php" method="post" required>
					<input type="text" name="firstname" placeholder="firstname *">
					<input type="text" name="infixes" placeholder="infixes">
					<input type="text" name="lastname" placeholder="lastname *">
					<input type="email" name="email" placeholder="Email *">
					<input id="Registerpassword" type="password" name="password" placeholder="Password *">
					<div>
						<input type="checkbox" onclick="showPassword()"><label for="ShowPassword">Show Password</label>
					</div>
					<ul id="passReq">
						<li>Passwords must be at least 8 characters long.</li>
						<li>Have at least 1 lower case letter [a-z]</li>
						<li>Have at least 1 upper case letter [A-Z]</li>
						<li>Have at least 1 numeric character [0-9]</li>
						<li>Have at least 1 special character: ~`!@#$%^&*()-_+={}[]|\;:"<>,./?</li>
					</ul>
					<input type="submit" name="submit" value="Register">
				</form>
				<p>* : Field is required!</p>
			</div>
		</section>
		<!-- Register -->
	</main>
</body>

</html>