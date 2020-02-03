<?php 
	$array = scandir("/home/localadmin/sambashare", 1);
	
	print_r($array);

	$f = $array[15];

	print_r($f)

	/*
	$file = fopen("/home/localadmin/sambashare/" . $f, "r") or die("Unable to open file!");
	echo fread($file, filesize("/home/localadmin/sambashare/" . $f));
	fclose($file);
	*/


	$get = file_get_contents("/home/localadmin/sambashare/" . $f);
	echo $get;
	$arr = simplexml_load_string($get);
	print_r($arr);
	echo $arr->MEASUREMENT[0]->DATE . "\n";
	echo $arr->MEASUREMENT[0]->TIME . "\n";
	echo $arr->MEASUREMENT[0]->TEMP ."\n";
	echo $arr->MEASUREMENT[0]->WDSP . "\n";
	echo $arr->MEASUREMENT[0]->PRCP;




?>
