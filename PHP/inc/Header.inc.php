<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<nav id="headerNavigation" class="headerNavigation">
	<ul id='expand-menu' onclick="togglemenu()"><span class="material-icons md-36">menu</span></ul>
	<ul id='btnContainer'>
		<li class='LOGO_li'>
			<a href='/apo_ahmad'><img src='/apo_ahmad/Assets/LOGO/LOGO.png' alt='LOGO' class='LOGO'></a>
		</li>
		<li><a class='btn <?php if($page=='Home'){echo 'active';}?>' href='/apo_ahmad'>Home</a></li>
		<li><a class='btn <?php if($page=='Services'){echo 'active';}?>' href='/apo_ahmad/Services'>Services</a></li>
		<li><a class='btn <?php if($page=='Medicijnen'){echo 'active';}?>' href='/apo_ahmad/medicijnen'>medicijnen</a></li>
		<!-- <li><a class='btn <?php if($page=='Voorlichting'){echo 'active';}?>' href='/apo_ahmad/Voorlichting'>Voorlichting</a></li> -->
		<li><a class='btn <?php if($page=='Contact'){echo 'active';}?>' href='/apo_ahmad/Contact'>Contact</a></li>
		<?php if (isset($_SESSION['first_name'])) {
			echo
			"<li class='dropdown'>
				<a href='/apo_ahmad/MijnApo' class='dropbtn'>Mijn APO ($_SESSION[first_name])</a>
				<div class='dropdown-content'>
					<a href='#'>winkelwagen</a>
					<a href='#'>bestellingen</a>
					<a href='#'>Account</a>
					<a href='/apo_ahmad/PHP/Logout'>Uitloggen</a>
				</div>
			</li>";
		} else {
			if($page=='LoginPage'){$active = 'active';} else {$active='';}
			echo
			"<li><a href='/apo_ahmad/MijnApo' class='btn dropbtn $active'>Mijn APO (inlog)</a></li>";
		}
		?>

	</ul>
</nav>