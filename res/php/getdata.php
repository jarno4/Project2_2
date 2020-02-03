<?php


	$stations = scandir("/home/localadmin/sambashare", 1);
	$station = $stations[15];


	$stations = scandir("/home/localadmin/sambashare/".$station, 1);
	$f = $stations[5];


	$xml = simplexml_load_file("/home/localadmin/sambashare/".$station);
	print_r($xml);




	$get = file_get_contents("/home/localadmin/sambashare/" . $station . "/". $f);
	echo $get."<br>";

	$arr = simplexml_load_string($xml);
	print_r($arr);



?>
