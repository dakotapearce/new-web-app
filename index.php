<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Recipe Book by Pearcey</title>
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

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2><em>A recipe app, free of use to anyone.</em></h2>
						<a href="learn-more.php" class="button">Learn More</a>
					</header>
				</section>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-paper-plane"></i>
									<h3>Storage</h3>
									<p>Keep millions of recipes in storage for you to share.</p>
								</div>
							</section>
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-pencil-alt"></i>
									<h3>Write</h3>
									<p>Create infinite amount of recipes that add to your book.</p>
								</div>
							</section>
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-wrench"></i>
									<h3>Creativity</h3>
									<p>Customize your title page to whatever your want.</p>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- Posts -->
				<section class="wrapper style2">
					<div class="container">
						<div class="row">
							<section class="col-6 col-12-narrower">
								<div class="box post">
									<a href="#" class="image left"><img src="images/pic02.gif" alt="" /></a>
									<div class="inner">
										<h3>An app for all</h3>
										<p>This app is easy to install and use. See the <a href="about.php">About Page</a> for more info.</p>
									</div>
								</div>
							</section>
							<section class="col-6 col-12-narrower">
								<div class="box post">
									<a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
									<div class="inner">
										<h3>Demo</h3>
										<p>Visit the <a href="demo.php">Demo Page</a> to try it out yourself.</p>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="col-6 col-12-narrower">
								<div class="box post">
									<a href="#" class="image left"><img src="images/pic03.png" alt="" /></a>
									<div class="inner">
										<h3>Download</h3>
										<p>Know your stuff already head to <a href="learn-more.php">Downloads</a> to get going.</p>
									</div>
								</div>
							</section>
							<section class="col-6 col-12-narrower">
								<div class="box post">
									<a href="#" class="image left"><img src="images/pic04.png" alt="" /></a>
									<div class="inner">
										<h3>Contact US</h3>
										<p>You can contact us from the <a href='contact.php'>Contact Page</a> and get help within 24hours.</p>
									</div>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- CTA -->
				<section id="cta" class="wrapper style3">
					<div id="anime-bottom" class="container">
							<h2>Are you ready to continue? Head to about to learn more, download and get started.</h2>
							<a href="learn-more.php" class="button">Get Started</a>
					</div>
				</section>

            <!-- Footer -->
            <div id="footer">
				<?php include ('footer.php');?>
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

				// Anime function for the 3 icon with a little information 

				let waypoint = new Waypoint({
				    element: document.getElementsByClassName('highlight')[1],
				    handler: function() {
				        anime({
				            targets: '.highlight',
							easing: 'linear',
							duration: 1000,
				            translateY: [-100, 0],
				            opacity: [0, 1],
				        })
				        waypoint.disable()
					},
					offset: '70%'
				})

				// Anime functions for the 4 elements near the bottom ofd the page

				let group1 = [document.getElementsByClassName('post')[0], document.getElementsByClassName('post')[2]]
				let group2 = [document.getElementsByClassName('post')[1], document.getElementsByClassName('post')[3]]

				let waypoint1 = new Waypoint({
				    element: document.getElementsByClassName('post')[0],
				    handler: function() {
				        anime({
				            targets: group1,
				            easing: 'linear',
				            translateX: {
				                value: [-100, 0],
				                duration: 1000
				            },
				            opacity: [0, 1]
				        })
				        waypoint1.disable()
				    },
				    offset: '70%'
				})

				let waypoint2 = new Waypoint({
				    element: document.getElementsByClassName('post')[1],
				    handler: function() {
				        anime({
				            targets: group2,
				            easing: 'linear',
				            translateX: {
				                value: [100, 0],
				                duration: 1000
				            },
				            opacity: [0, 1]
				        })
				        waypoint2.disable()
				    },
				    offset: '70%'
				})
			</script>
	</body>
</html>