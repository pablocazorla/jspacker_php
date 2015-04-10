<?php


	
	$stringList = '';
	$type = 'js';
	$path = '';
	$nocache = 'false';

	if(isset($_GET['type']) && !empty($_GET['type'])){
		$type = $_GET["type"];
	}
	if(isset($_GET['path']) && !empty($_GET['path'])){
		$path = $_GET["path"];
	}
	if(isset($_GET['files']) && !empty($_GET['files'])){
		$stringList = $_GET["files"];
	}
	if(isset($_GET['nocache']) && !empty($_GET['nocache'])){
		$nocache = $_GET["nocache"];
	}

	$contentType = $type;


	if($type == 'js'){
		$contentType = 'javascript';
	}


	header('Content-Type: text/' . $contentType);


	$list = explode("|", $stringList);

	$fileout = '';

	for($i = 0; $i < count($list); ++$i) {
	    $fileout .= $list[$i] . '_';
	}
	$fileout .= 'minified.' . $type;


	if($nocache == 'false'){
		$fileoutexist = @file_get_contents($type . '/' . $fileout);
	}else{
		$fileoutexist = false;
	}


	if($fileoutexist){
		echo $fileoutexist;
	}else{		

		$file = '';
		$someFile = false;

		for($i = 0; $i < count($list); ++$i) {
			$filetemp = @file_get_contents('../' . $path . '/' . $list[$i] . '.' . $type);
			if($filetemp){
				$file .= $filetemp;
				$someFile = true;
			}		    
		}

		if($someFile){

			$minifiedFile = $file;

			if($type == 'js'){
				require 'jsminifier.php';
				$minifiedFile = \JShrink\Minifier::minify($file);				
			}else if($type == 'css'){
				$minifiedFile = preg_replace( "/\r|\n/", "", $minifiedFile);
				$minifiedFile = preg_replace( "/;}/", "}", $minifiedFile);
			}
			
			file_put_contents($type . '/' . $fileout, $minifiedFile);
						
			echo ';'.$minifiedFile.';';
		}	
	}
?>