<?php
	/*
	$handle = opendir(__DIR__);
	var_dump($handle);
	while(false !== ($file = readdir($handle))) {
		var_dump($file);
	}
	closedir($handle);
	*/

	$list = scandir(__DIR__, 1);
	var_dump($list);
?>