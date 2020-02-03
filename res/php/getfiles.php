<?php 
	$array = scandir("/home/localadmin/sambashare", 1);
	print_r($array[15]);

	$data = fopen($array[15], "r") or die("Unable to open file!");
	echo fread("/home/localadmin/$myfile");
	fclose($myfile);	
?>