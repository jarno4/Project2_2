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
					      	<li class="tab" id="tab1"><a href="#temperatuur">Temperature</a></li>
					      	<li class="tab" id="tab2"><a href="#regenval">Rainfall</a></li>
					      	<li class="tab" id="tab3"><a href="#windsterkte">Windstrength</a></li>
						</ul>
					        <canvas id="temperatuurg"></canvas>
					        <canvas id="regenvalg"></canvas>
					        <canvas id="windsterkteg"></canvas>

                            <a href="newfilex.xml" download>
					            <button id="xmlbutton"> Download XML </button>
                            </a>
				         		</div>
							</div>
					        <script src="/res/js/jquery-3.4.1.min.js"></script>
							<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
							<script type="text/javascript" src="/res/js/map.js" ></script>
							<script type="text/javascript" src="/res/js/graph.js" ></script>

							<?php
							        //echo file_get_contents("1580775695138.txt");
							$myFile = "/home/localadmin/sambashare/726770/1580775683471.txt";
							$lines = file($myFile);//file in to an array
							$myArray  = array();;

							foreach($lines as $line) 
							{  $myArray[]=$line;

							}

							$myfile = fopen("newfilex.xml", "w") or die("Unable to open file!");

							$txt = "<?xml version='1.0' encoding='UTF-8'?>\n";
							fwrite($myfile, $txt);
							$txt = "<MEASUREMENT>\n";
							fwrite($myfile, $txt);
							$txt = "<STN>".trim($myArray[0])."</STN>\n";
							fwrite($myfile, $txt);
							$txt = "<DATE>".trim($myArray[1])."</DATE>\n";
							fwrite($myfile, $txt);
							$txt = "<TIME>".trim($myArray[2])."</TIME>\n";
							fwrite($myfile, $txt);
							$txt = "<DEWP>".trim($myArray[3])."</DEWP>\n";
							fwrite($myfile, $txt);
							$txt = "<STP>".trim($myArray[4])."</STP>\n";
							fwrite($myfile, $txt);
							$txt = "<SLP>".trim($myArray[5])."</SLP>\n";
							fwrite($myfile, $txt);
							$txt = "<VISIB>".trim($myArray[6])."</VISIB>\n";
							fwrite($myfile, $txt);
							$txt = "<SLP>".trim($myArray[7])."</SLP>\n";
							fwrite($myfile, $txt);
							$txt = "<PRCP>".trim($myArray[8])."</PRCP>\n";
							fwrite($myfile, $txt);
							$txt = "<SNDP>".trim($myArray[9])."</SNDP>\n";
							fwrite($myfile, $txt);
							$txt = "<FRSHTT>".trim($myArray[10])."</FRSHTT>\n";
							fwrite($myfile, $txt);
							$txt = "<CLDC>".trim($myArray[11])."</CLDC>\n";
							fwrite($myfile, $txt);
							$txt = "<WNDDIR>".trim($myArray[12])."</WNDDIR>\n";
							fwrite($myfile, $txt);
							$txt = "</MEASUREMENT>\n";
							fwrite($myfile, $txt);

							fclose($myfile);
							?>
	</body>
	</html>