<?php


	$stations = scandir("/home/localadmin/sambashare", 1);
	$station = $stations[15];
	echo $station."<br>";

	$stations = scandir("/home/localadmin/sambashare/".$station, 1);
	$f = $stations[5];
	echo $f."<br>";

	$xml = simplexml_load_file("/home/localadmin/sambashare/" . $station . "/". $f);
	print_r($xml);




	$get = file_get_contents("/home/localadmin/sambashare/" . $station . "/". $f);
	echo $get."<br>";

	$arr = simplexml_load_string($get);



?>
