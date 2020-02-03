<?php


	$stations = scandir("/home/localadmin/sambashare", 1);
	$station = $stations[15];

	$stations = scandir("/home/localadmin/sambashare/".$station, 1);
	$f = $stations[5];

	$dir = "/home/localadmin/sambashare/" . $station . "/". $f;


	$xml = simplexml_load_file($dir);


	foreach ($xml as $element) {
	    echo $element;
    }
}

/*
	$get = file_get_contents("/home/localadmin/sambashare/" . $station . "/". $f);
	echo $get."<br>";

	$arr = simplexml_load_string($get);

	print_r($arr);
	
	echo $arr->MEASUREMENT[0]->DATE . "\n";
	echo $arr->MEASUREMENT[0]->TIME . "\n";
	echo $arr->MEASUREMENT[0]->TEMP ."\n";
	echo $arr->MEASUREMENT[0]->WDSP . "\n";
	echo $arr->MEASUREMENT[0]->PRCP;
*/



?>
