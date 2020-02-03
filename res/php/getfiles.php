<?php 
	$array = scandir("/home/localadmin/sambashare", 1);
	print_r($array[15]);

	$file = fopen("/home/localadmin/" + $array[15], "r") or die("Unable to open file!");
	echo fread($file);
	fclose($file);	
?>