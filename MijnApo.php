<?php
session_start();
if (!isset($_SESSION['first_name'])) {
	header('Location: /apo_ahmad/LoginPage');
} else {
	if ($_SESSION['user_level'] === 1) {
		header('Location: /apo_ahmad/AdminPage');
	}
}
$page = 'MijnApo'
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="icon" type="image/png" href="/apo_ahmad/Assets/LOGO/LOGO.png" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/apo_ahmad/CSS/style.css">
	<link rel="stylesheet" href="/apo_ahmad/CSS/MijnApo.css">
	<script src="/apo_ahmad/JS/expand_menu.js"></script>
</head>

<body>
	<header>
		<?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Header.inc.php' ?>
	</Header>

	<main>
		<section>
			<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/messages.inc.php' ?>
		</section>
	</main>
</body>

</html>