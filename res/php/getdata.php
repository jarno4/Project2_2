<?php
	/*
	$base_dir = "/home/localadmin/sambashare/";
	$stations = scandir($base_dir, SCANDIR_SORT_DESCENDING);
    $measurements = array();
    //$latest_station_files = array();
    //print_r($stations);

	foreach($stations as $station){
	    $station_path = $base_dir.$station;
        if(is_dir($station_path) && strpos($station, '726') !== false){
            foreach(scandir($station_path, SCANDIR_SORT_DESCENDING) as $file){
                $measurements[$station][] = $station_path."/".$file;
            }
        }

	}
	print_r($measurements);
    */

	function get_current(){
	    $base_dir = "/home/localadmin/sambashare/";
    	$stations = scandir($base_dir, SCANDIR_SORT_DESCENDING);
        $measurements = array();
    	foreach($stations as $station){
    	    $station_path = $base_dir.$station;
            if(is_dir($station_path) && strpos($station, '72') !== false){
                $file = scandir($station_path, SCANDIR_SORT_DESCENDING)[0];
                if(strpos($file, '.txt') !== false){
                    $measurements[] = $station_path."/".$file;
                }
            }
    	}
    	return $measurements;
	}
    //print_r(get_current());

	//$xml = simplexml_load_file();
    //print_r(new SimpleXMLElement(str_replace(":", "_", simplexml_load_file(get_current()[0]))));
    
    //$get = file_get_contents(get_current()[0]);
    
    $myArray  = array();
    $i = 0;
	foreach(get_current() as $station_data){
		foreach(file($station_data) as $line) {  
			$myArray[$i][] = $line;
		}	
		$i++;	
	}
	
	
	print_r(json_encode($myArray));



    //echo $get;

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
