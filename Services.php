<?php $page = 'Services' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Services</title>
	<link rel="icon" type="image/png" href="/apo_ahmad/Assets/LOGO/LOGO.png" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/apo_ahmad/CSS/style.css">
	<link rel="stylesheet" href="/apo_ahmad/CSS/Services.css">
	<script src="/apo_ahmad/JS/SlideShow.js"></script>
	<script src="/apo_ahmad/JS/expand_menu.js"></script>
</head>

<body>
	<header>
		<?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Header.inc.php' ?>
	</Header>

	<main>
		<!-- Slide Show Start -->
		<section>
			<?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/SlideShow.inc.php' ?>
		</section>
		<!-- Slide Show End -->
		<!-- Service 1 Start -->
		<section>
			<div class="Services_1_Title">Service 1</div>
			<div id="Services_1">
				<div class="Services_1_img">
					<img src="" alt="">
				</div>
				<div class="Services_1_txt">

				</div>
			</div>
		</section>
		<!-- Service 1 End -->
		<!-- Service 2 Start -->
		<section>
			<div class="Services_2_Title">Service 2</div>
			<div id="Services_2">
				<div class="Services_2_txt">

				</div>
				<div class="Services_2_img">
					<img src="" alt="">
				</div>
			</div>
		</section>
		<!-- Service 2 End -->
		<!-- Openingstijden Start -->
		<section>
			<div class="OpeningstijdenTitle">Openingstijden</div>
			<div id="Openingstijden">
				<div class="Openingstijden">

				</div>
				<div class="Openingstijden">

				</div>
				<div class="Openingstijden">
					<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12080.099165951115!2d-73.965441!3d40.805449!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f63c75af2d65%3A0xf45542f6cb090cc9!2s2880%20Broadway%2C%20New%20York%2C%20NY%2010025!5e0!3m2!1sen!2sus!4v1644790899432!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</section>
		<!-- Openingstijden End -->
	</main>
</body>

</html>