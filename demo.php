<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>No Sidebar - Arcana by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/javascript.js"></script>
	</head>
	<style>

	#titlePage {
		background-image: url(images/recipes.jpg);
		background-repeat: no-repeat;
		height: 771px;
		width: 542px;
		margin: 0 auto 50px auto;
	}
	
	#recipes {
		background-image: url(images/page.jpg);
		background-repeat: no-repeat;
		display: none;
		height: 771px;
		width: 542px;
		margin: 0 auto;
	}
	</style>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
                <div id="header">
                    <?php include ("header.php");?>
				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<?php include ("assets/app/index.php");?>
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
	</body>
</html>