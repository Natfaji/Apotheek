<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="icon" type="image/png" href="Assets/LOGO/LOGO.png"/>
	<link rel="stylesheet" href="CSS/index.css">
	<script src="JS/SlideShow.js"></script>
	<script src="JS/ActiveNav.js"></script>
</head>

<body>
	<header>
		<nav>
			<ul id="btnContainer">
				<li class="LOGO_li">
					<a href="/"><img src="Assets/LOGO/LOGO.png" alt="LOGO" class="LOGO"></a>
				</li>
				<li><a class="btn active" href="#home">Home</a></li>
				<li><a class="btn" href="#">Service</a></li>
				<li><a class="btn" href="#">Voorlichting</a></li>
				<li class="dropdown">
					<a href="#" class="dropbtn">Mijn APO (Inlog)</a>
					<div class="dropdown-content">
						<a href="#">winkelwagen</a>
						<a href="#">bestellingen</a>
						<a href="#">Account</a>
						<a href="#">Uitloggen</a>
					</div>
				</li>
			</ul>
		</nav>
	</Header>

	<main>

		<!-- Slide show -->
		<div class="">
			<div class="slideshow-container">

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="Assets/Images/1.jpg">
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="Assets/Images/2.jpg">
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="Assets/Images/3.jpg">
				</div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>
			<br>

			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4807.091528015284!2d4.764386612746656!3d52.95659588718322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf37f9675d823b%3A0xc1bcfc6bf436331a!2sBenu%20Pharmacy!5e0!3m2!1sen!2snl!4v1643885393893!5m2!1sen!2snl" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<!-- Slide show -->

		<section>
			<div class="services">
				Onze services
			</div>
		</section>

	</main>
</body>

</html>