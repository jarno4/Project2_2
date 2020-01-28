<?php require($_SERVER["DOCUMENT_ROOT"].'/account/user_session.php')?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/res/style.css">
	</head>
	<body>
		<div class="header">
			<a href="/app" >
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

			</div>

			<div class="map">
				<canvas id="myChart"></canvas>
				<script type="text/javascript">
				</script>
			</div>

		</div>
		<div class="footer_index"></div>
		<script src="/res/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	</body>
	</html>