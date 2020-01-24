<?php require($_SERVER["DOCUMENT_ROOT"].'/account/user_session.php')?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/res/css/style.css">
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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
				<span class="tooltip" id="tip">Tooltip</span>

				<?php echo file_get_contents($_SERVER["DOCUMENT_ROOT"]."/res/svg/illustrator_map.svg"); ?>
			</div>
				<div class="map">
					<h2 id="sideheader"> Please select a province </h2>
						<div class='tab'>
							<button class="tabbutton" id = "temperatuur">Temperatuur</button>
							<button class="tabbutton" id = "regenval">Regenval</button>
							<button class="tabbutton" id = "windsterkte">Windsterkte</button>

								<div class = "tabcontent">
									<canvas id="temperatuur"></canvas> 
								</div>

								<div class = "tabcontent">	
								    <canvas id="regenval"></canvas> 
								</div>

								<div class = "tabcontent">
									<canvas id="windsterkte"></canvas>
								</div>
						</div>
				</div>
			</div>
		<!--<div class="footer_index"></div>-->	
		<script src="/res/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="/res/js/map.js" ></script>
		<script type="text/javascript" src="/res/js/raingraph.js" ></script>
		<script type="text/javascript" src="/res/js/openGraphTabs.js" ></script>
	</body>
	</html>