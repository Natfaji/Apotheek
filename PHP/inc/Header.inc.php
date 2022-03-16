<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<nav class="HeaderNavigation">
	<ul id='btnContainer'>
		<li class='LOGO_li'>
			<a href='/'><img src='/Assets/LOGO/LOGO.png' alt='LOGO' class='LOGO'></a>
		</li>
		<li><a class='nav-item btn <?php if($page=='Home'){echo 'active';}?>' href='/'>Home</a></li>
		<li><a class='nav-item btn <?php if($page=='Services'){echo 'active';}?>' href='/Services'>Services</a></li>
		<li><a class='nav-item btn <?php if($page=='Medicijnen'){echo 'active';}?>' href='/medicijnen'>medicijnen</a></li>
		<li><a class='nav-item btn <?php if($page=='Voorlichting'){echo 'active';}?>' href='/Voorlichting'>Voorlichting</a></li>
		<?php if (isset($_SESSION['first_name'])) {
			echo
			"<li class='dropdown'>
				<a href='/MijnApo' class='dropbtn'>Mijn APO ($_SESSION[first_name])</a>
				<div class='dropdown-content'>
					<a href='#'>winkelwagen</a>
					<a href='#'>bestellingen</a>
					<a href='#'>Account</a>
					<a href='/PHP/Logout'>Uitloggen</a>
				</div>
			</li>";
		} else {
			if($page=='LoginPage'){$active = 'active';} else {$active='';}
			echo
			"<li><a href='/MijnApo' class='nav-item btn dropbtn $active'>Mijn APO (inlog)</a></li>";
		}
		?>

	</ul>
</nav>