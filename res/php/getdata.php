<?php
	$stations = scandir("/home/localadmin/sambashare", SCANDIR_SORT_DESCENDING);
    $latest_station_files = array();
    print_r($stations);
	foreach($stations as $station){
	    //print_r($station);
	    //$station_files = scandir("/home/localadmin/sambashare/".$station, SCANDIR_SORT_DESCENDING);
	    //$latest_station_files[] = "/home/localadmin/sambashare/".$station."/".station_files[0];
	}
    print_r($latest_station_files);

	//$latest_data = scandir("/home/localadmin/sambashare/".$station, SCANDIR_SORT_DESCENDING);
	//$f = $stations[5];
	//$dir = "/home/localadmin/sambashare/" . $station . "/". $f;


	//$xml = simplexml_load_file($dir);


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
