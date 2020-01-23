<?php require($_SERVER["DOCUMENT_ROOT"].'/account/user_session.php')?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/res/style.css">
	</head>
	<body>
		<div class="header">
			<img src="/res/img/logo.png" >
            <div class="navbar">
            	<a href="#">Data</a>
           		<a href="#">Map</a>
            	<a href="#">Contact</a>
            </div>
		</div>

		<div class="content">
			<div class="side">
				<h2 id="sideheader"> Please select a province </h2>
				<script> createRainGraph(); </script>
			</div>

			<div class="map">
			</div>

		</div>
		<div class="footer_index"></div>
		<script src="/res/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="/res/js/raingraph.svg"></script>
	</body>
	</html>