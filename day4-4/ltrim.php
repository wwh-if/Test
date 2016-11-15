<?php
	$str1 = "#######      Hello Wolrd!      #########";
	$str2 = ltrim(ltrim($str1, "#"));
	$str3 = rtrim(rtrim($str1, "#"));
	print $str1 . "\r\n";
	print $str2;
	print strlen($str2) . "\r\n";
	print $str3;
	print strlen($str3);
	ucw
?>