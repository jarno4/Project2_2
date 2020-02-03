<?php 
	function getData(){}
		$array = scandir("/home/localadmin/sambashare", 1);

		/*
		for($i=0;$i<count($array)-1;$i++){
			if($array[$i] == ...){
				$f = $array[15];
			}
		}
		*/


		$get = file_get_contents("/home/localadmin/sambashare/" . $f);
		$arr = simplexml_load_string($get);
		print_r($arr);
		echo $arr->MEASUREMENT[0]->DATE . "\n";
		echo $arr->MEASUREMENT[0]->TIME . "\n";
		echo $arr->MEASUREMENT[0]->TEMP ."\n";
		echo $arr->MEASUREMENT[0]->WDSP . "\n";
		echo $arr->MEASUREMENT[0]->PRCP;

}

echo getData();
?>
