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
			<div class="map">
				<span class="tooltip" id="tip">Tooltip</span>

				<?php echo file_get_contents($_SERVER["DOCUMENT_ROOT"]."/res/svg/illustrator_map.svg"); ?>
			</div>
				<div class="graph">
					<h2 id="sideheader"> Please select a province </h2>
						<ul id="tabs">
					      	<li><a href="#temperatuur">Temperatuur</a></li>
					      	<li><a href="#regenval">Regenval</a></li>
					      	<li><a href="#windsterkte">Windsterkte</a></li>

						</ul>
					        <div class="canvascontainer" id="temperatuur">
					        	<canvas id="temperatuurg"></canvas>
					        </div>
					        <div class="canvascontainer" id="regenval">
					        	<canvas id="regenvalg"></canvas>
					        </div>
					        <div class="canvascontainer" id="windsterkte">
					        	<canvas id="windsterkteg"></canvas>
					        </div>

         				</div>


						<!--<div class='tab'>
							<button id = "temperatuur">Temperatuur</button>
							<button id = "regenval">Regenval</button>
							<button id = "windsterkte">Windsterkte</button>
							
							<canvas id="temperatuurg"></canvas>
							<canvas id="regenvalg"></canvas>
							<canvas id="windsterkteg"></canvas>

						</div>
				</div>-->
			</div>
		<!--<div class="footer_index"></div>-->	
		<script src="/res/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="/res/js/map.js" ></script>
		<script type="text/javascript" src="/res/js/raingraph.js" ></script>
		<script type="text/javascript" src="/res/js/openGraphTabs.js" ></script>
	</body>
	</html>