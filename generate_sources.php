<?php

    echo "var directories = new Map();";
	chdir("assets/images");
	$dirs = array_filter(glob('*'), 'is_dir');
	echo "var arr; \n";
	foreach($dirs as $dir){
		echo "arr = new Array(); \n";
		$files = scandir($dir);
		foreach($files as $file){
			if($file == "." || $file == ".."){
				continue;
			}
			echo "arr.push(\"" . $file . "\"); \n";
		}
		echo "directories.set(\"" . $dir ."\", arr); \n";
	}
?>
