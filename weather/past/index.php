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
						<ul id="tabs">
					      	<li class="tab" id="tab1"><a href="#temperatuur">Temperatuur</a></li>
					      	<li class="tab" id="tab2"><a href="#regenval">Regenval</a></li>
					      	<li class="tab" id="tab3"><a href="#windsterkte">Windsterkte</a></li>
						</ul>
					        <canvas id="temperatuurg"></canvas>
					        <canvas id="regenvalg"></canvas>
					        <canvas id="windsterkteg"></canvas>
                            <a href="/res/img/green.jpg" download>
					            <button id="xmlbutton"> Download XML </button>
                            </a>
         		</div>
			</div>
        <script src="/res/js/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script type="text/javascript" src="/res/js/map.js" ></script>
		<script type="text/javascript" src="/res/js/graph.js" ></script>
	</body>
	</html>