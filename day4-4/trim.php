<?php
	$str1 = "XX   Hello World!   XX";
	print $str1 . "\r\n";
	$str2 = trim(trim(trim($str1, 'X')), "!");
	print $str2;
	// print trim($str1);
	print strlen($str2);
?>