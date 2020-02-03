<?php


	$stations = scandir("/home/localadmin/sambashare", 1);
	$station = $stations[15];
	echo $station."<br>";

	$stations = scandir("/home/localadmin/sambashare/".$station, 1);
	$f = $stations[5];
	echo $f."<br>";

	$file = fopen("/home/localadmin/sambashare/" . $station . "/". $f, "r") or die("Unable to open file!");
	echo fread($file, filesize("/home/localadmin/sambashare/" . $station . "/". $f));
	fclose($file);





	$get = file_get_contents("/home/localadmin/sambashare/" . $station . "/". $f);
	echo $get."<br>";

	$arr = simplexml_load_string($get);



?>
