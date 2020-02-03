<?php 
	$array = scandir("/home/localadmin/sambashare", 1);
	$f = $array[15];
	/*
	$file = fopen("/home/localadmin/sambashare/" . $f, "r") or die("Unable to open file!");
	echo fread($file, filesize("/home/localadmin/sambashare/" . $f));
	fclose($file);
	
*/

	$get = file_get_contents("/home/localadmin/sambashare/" . $f);
	$arr = simplexml_load_string($get);
	//print_r($arr[0][1]);


	foreach ($arr as $key => $value) {
		echo $key, $value;
	}

?>
