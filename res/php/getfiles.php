<?php 
	$array = scandir("/home/localadmin/sambashare", 1);
	$f = $array[15];

	$file = fopen("/home/localadmin/sambashare/" . $f, "r") or die("Unable to open file!");
	echo fread($file);
	fclose($file);	
?>