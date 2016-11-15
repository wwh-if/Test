<?php
	$str = "a=100&b=200&c=400";
	// var_dump($GLOBALS);
	parse_str($str);
	// var_dump($GLOBALS);
	print $a . "\r\n";
	print $b . "\r\n";
	print $c . "\r\n";
