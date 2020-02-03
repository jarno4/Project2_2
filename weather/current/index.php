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
							<img id="weatherpicture" src="/res/img/Zon.png" >
                            <h1 id="weathertemperature"> 9°</h1>
							<div class="weatherinfo"> <h3> Rainfall: 20% </h3><h3> wind strength: 5 </h3> 
							<?php $fileList = glob('/home/localadmin/sambashare');
								//Loop through the array that glob returned.
								foreach($fileList as $filename){
								   //Simply print them out onto the screen.
								   echo $filename, '<br>'; 
							} ?>
						</div> </div>

         		</div>
			</div>
        <script src="/res/js/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script type="text/javascript" src="/res/js/map.js" ></script>
		<script type="text/javascript" src="/res/js/currentweather.js" ></script>
	</body>
	</html>