<?php


	$stations = scandir("/home/localadmin/sambashare", 1);
	$station = $stations[15];
	$stations = scandir("/home/localadmin/sambashare/".$station, 1);
	$f = $stations[5];

	$dir = "/home/localadmin/sambashare/" . $station . "/". $f."";
	echo $dir;
	$get = file_get_contents($dir);
	echo $get."<br>";

	$arr = simplexml_load_string($get);
	print_r($arr);



?>
