<?php


	$stations = scandir("/home/localadmin/sambashare", 1);
	$station = $stations[15];


	$stations = scandir("/home/localadmin/sambashare/".$station, 1);
	$f = $stations[5];

	$get = file_get_contents("/home/localadmin/sambashare/" . $station . "/". $f);


	$arr = simplexml_load_string($get);
	print_r($arr);



?>
