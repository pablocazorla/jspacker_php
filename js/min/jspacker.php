<?php
	
	$stringList = '';

	if(isset($_GET['files']) && !empty($_GET['files'])){
		$stringList = $_GET["files"];
	}

	$list = explode("|", $stringList);

	$fileout = '';

	for($i = 0; $i < count($list); ++$i) {
	    $fileout .= $list[$i] . '_';
	}
	$fileout .= 'minified.js';

	$fileoutexist = @file_get_contents('js/' . $fileout);

	if($fileoutexist){
		echo $fileoutexist;
	}else{		
		require 'minifier.php';

		$js = '';
		$someJs = false;

		for($i = 0; $i < count($list); ++$i) {
			$jstemp = @file_get_contents('../' . $list[$i] . '.js');
			if($jstemp){
				$js .= $jstemp;
				$someJs = true;
			}		    
		}

		if($someJs){
			$minifiedCode = \JShrink\Minifier::minify($js);		

			file_put_contents('js/' . $fileout, $minifiedCode);
			echo $minifiedCode;
		}		
	}
?>