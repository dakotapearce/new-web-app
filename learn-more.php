<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Left Sidebar - Arcana by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
                    <?php include ("header.php");?>
				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<ul class="links">
												<li><a href="#about">About</a></li>
												<li><a href="#how-to">How To</a></li>
												<li><a href="#download">Download</a></li>
											</ul>
											<footer>
												<a href="demo.php" class="button">Demo</a>
											</footer>
										</section>

								</div>
							</div>
							<div class="col-8  col-12-narrower imp-narrower">
								<div id="content">

									<!-- Content -->

										<article id="about">
											<header>
												<h2>About</h2>
												<p>Information and technical terms on how the app works</p>
											</header>

											<span class="image featured"><img src="images/banner.jpg" alt="" /></span>

											<h3>Basic Intro</h3>
											<p>In basic terms the app works by constantly adding values to a list thats never ending.
												Once your happy with your list then the app uses a button to move up or down the list,
												cycling through all your items. There all also some helpers that changes back to the start of the list
												and vice versa.</p>

											<h3>Technical Javascript</h3>
											<p>If you have some knowledge with javascript then you'll probably know how to make this, 
												but if you don't understand heres how it works. So you created some inputs and text fields and your ready to go,
												now think of the list I was talking about before as an array. If we keep pushing new values to the end of the array 
												then we can create a loop that loops through that array. Then create statements to rotate between start and end.</p>
										</article>

										<article id="how-to">
											<header>
												<h2>How to use and install</h2>
												<p>Instructions and install guide</p>
											</header>

											<h3>Install</h3>
											<p>To install the app you need to download the provided files and drop them into your root folder. After you dropped 
												the files there you need to make sure both the javascript file and the css file are properly sourced. Then you 
												can either php include your html elements or manually put them into a div container.</p>

											<h3>Instructions</h3>
											<p>The usage of the app is pretty basic and self explanatory, but a couple Instructions and tips are. If your styling the app yourself make sure your classes on your site don't match each other, another is try to center the app in the middle of the screen just so you can see it better. Try not to change to much in the javascript file or the elements in the HTML because there is a big chance you'll break the app, if you don't know what your doing.</p>
										</article>
										
										<article id="download">
											<header>
												<h2>Download</h2>
												<a class="button" href="assets/app/demo.zip" download>Download V 1.0.0</a>
											</header>
										</article>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
                    <?php include ("footer.php");?>
				</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<!-- 1st javascript library using the waypoint library to locate elements when the come to view -->
			<script src="https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js"></script>

			<!-- 2nd javascript library using Anime.js to animate everything on my own -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>

			<!-- My javascript file i added for my own javascript, there is more in each php file because of an error I had -->
			<script src="assets/js/dakota-javascript.js"></script>
			<script>

				/* had to add single page animation scripts in the php because declaration errors would occur */


				// Anime function for the about section
				let howTo = document.querySelector('#how-to').children

				for (var i = 0; i < howTo.length; i++ ) {
					howTo[i].setAttribute('style', 'opacity:0;')
				}

				waypoint3 = new Waypoint({
					element: document.getElementById('how-to'),
					handler: function() {
						anime({
							targets: howTo,
							easing: 'linear',
							translateX: [-100, 0],
							opacity: [0,1],
							delay: anime.stagger(300)
						})
						waypoint3.disable()
					},
					offset: '75%'
				})

				//Anime function for the instruction section
				let elements = document.querySelector('#about').children

				for (var i = 0; i < elements.length; i++ ) {
					elements[i].setAttribute('style', 'opacity:0;')
				}

				waypoint4 = new Waypoint({
					element: document.getElementById('about'),
					handler: function() {
						anime({
							targets: elements,
							easing: 'linear',
							opacity: [0, 1],
							delay: anime.stagger(300)
						})
						waypoint4.disable()
					},
					offset: '90%'
				})

				// Anime function for the side bar

				waypoint5 = new Waypoint({
					element: document.getElementById('sidebar'),
					handler: function() {
						anime({
							targets: '#sidebar',
							easing: 'linear',
							translateY: [100, 0],
							opacity: [0, 1]
						})
						waypoint5.disable()
					},
					offset: '75%'
				})
			</script>
	</body>
</html>