<?php $page = 'Contact' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
	<link rel="icon" type="image/png" href="/apo_ahmad/Assets/LOGO/LOGO.png" />
	<link rel="stylesheet" href="/apo_ahmad/CSS/All.css">
	<link rel="stylesheet" href="/apo_ahmad/CSS/Contact.css">
	<script src="/apo_ahmad/JS/ActiveNav.js"></script>
	<script src="/apo_ahmad/JS/showPassword.js"></script>
</head>

<body>
	<header>
		<?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Header.inc.php' ?>
	</Header>

	<main>
		<section>
			<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/messages.inc.php' ?>
		</section>

		<section class="contact">
			<!-- Login -->
			<div id="contact">
				<h2>Contact</h2>
				<form name="ContactForm" action="/apo_ahmad/PHP/Contact.php" method="post" required>
					<label for="name">Name</label>
					<input type="text" name="name" placeholder="Your full name (required)">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="Email (required)">
					<label for="Subject">Subject</label>
					<input type="text" name="Subject" placeholder="Subject (required)">
					<label for="Message">Message</label>
					<textarea id="Message" name="Message" placeholder="Write your Message (required)" style="height:200px"></textarea>
					<input type="submit" name="submit" value="Send">
				</form>
			</div>
			<!-- Login -->
		</section>
	</main>
</body>

</html>