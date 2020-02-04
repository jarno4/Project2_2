<?php require($_SERVER["DOCUMENT_ROOT"].'/account/user_session.php')?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/res/css/style.css">
	</head>
	<body>
		<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php") ?>

		<div class="content">
			<div class="map">
				<span class="tooltip" id="tip">Tooltip</span>

				<?php echo file_get_contents($_SERVER["DOCUMENT_ROOT"]."/res/svg/illustrator_map.svg"); ?>
			</div>
				<div class="graph">
					<h2 id="sideheader"> Please select a province </h2>
						<div class="weatherdata">
							<span class='temp'>Temperature: <span></span></span>
                            <span class='rain'>Rainfall: <span></span></span>
                            <span class='wind_speed'>Wind speed: <span></span></span>
                            <span class='wind_direction'>Wind Direction: <span></span></span>
						</div>
				    </div>
         		</div>
			</div>
        <script src="/res/js/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script type="text/javascript" src="/res/js/map.js" ></script>
		<script type="text/javascript" src="/res/js/currentweather.js" ></script>
		<script>
		$.get("/res/php/getdata.php", function(response) {

		});
		</script>
	</body>
	</html>