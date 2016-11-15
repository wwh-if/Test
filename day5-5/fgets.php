<?php
	$handle = fopen("abc.txt", "r");
	// $line = fgets($handle);
	// var_dump($line);
	while (false !== ($line = fgetss($handle, 100, "<b><p><style>"))) {
		var_dump($line);
	}

	// do {
	// 	$line = fgets($handle);
	// 	var_dump($line);
	// } while($line !== false);
	fclose($handle);
?>