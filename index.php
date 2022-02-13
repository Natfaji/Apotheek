<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="icon" type="image/png" href="Assets/LOGO/LOGO.png" />
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
		<section>
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

			<div class="Dots" style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>
		</section>
		<!-- Slide show -->
		<!-- Nieuws -->
		<section>
			<div class="NieuwsTitle">Nieuws</div>
			<div id="Nieuws">
				<div class="Nieuws">

				</div>
				<div class="Nieuws">

				</div>
				<div class="Nieuws">

				</div>
			</div>
		</section>
		<!-- Nieuws -->
		<!-- Onze services -->
		<section>
			<div class="OnzeServicesTitle">Onze Services</div>
			<div id="OnzeServices">
				<div class="OnzeServices">

				</div>
				<div class="OnzeServices">

				</div>
				<div class="OnzeServices">

				</div>
			</div>
		</section>
		<!-- Onze services -->
		<!-- Openingstijden -->
		<section>
			<div class="OpeningstijdenTitle">Openingstijden</div>
			<div id="Openingstijden">
				<div class="Openingstijden">

				</div>
				<div class="Openingstijden_1">

				</div>
				<div class="Openingstijden_2">

				</div>
			</div>

			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12080.099165951115!2d-73.965441!3d40.805449!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f63c75af2d65%3A0xf45542f6cb090cc9!2s2880%20Broadway%2C%20New%20York%2C%20NY%2010025!5e0!3m2!1sen!2sus!4v1644790899432!5m2!1sen!2sus"style="border:0;" allowfullscreen="" loading="lazy"></iframe>

		</section>
		<!-- Openingstijden -->

	</main>
</body>

</html>