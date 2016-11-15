<?php
	$handle = fopen("1.txt", "r");
	$str = fread($handle, 5);
	var_dump($str);
?>