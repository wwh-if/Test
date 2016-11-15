<?php
	$handle = fopen("abc.txt", "rw");
	var_dump($handle);
	fclose($handle);
	var_dump($handle);
?>