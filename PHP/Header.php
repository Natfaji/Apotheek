<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<nav>
	<ul id='btnContainer'>
		<li class='LOGO_li'>
			<a href='/'><img src='Assets/LOGO/LOGO.png' alt='LOGO' class='LOGO'></a>
		</li>
		<li><a class='btn active' href='index.php'>Home</a></li>
		<li><a class='btn' href='Services.php'>Services</a></li>
		<li><a class='btn' href='medicijnen.php'>medicijnen</a></li>
		<li><a class='btn' href='#'>Voorlichting</a></li>
		<?php if (isset($_SESSION['first_name'])) {
			echo
			"<li class='dropdown'>
				<a href='MijnApo.php' class='dropbtn'>Mijn APO ($_SESSION[first_name] $_SESSION[user_level])</a>
				<div class='dropdown-content'>
					<a href='#'>winkelwagen</a>
					<a href='#'>bestellingen</a>
					<a href='#'>Account</a>
					<a href='PHP/Logout.php'>Uitloggen</a>
				</div>
			</li>";
		} else {
			echo
			"<a href='MijnApo.php' class='dropbtn'>Mijn APO (inlog)</a>";
		}
		?>

	</ul>
</nav>