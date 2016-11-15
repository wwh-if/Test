<?php
	$apple = 10;
	$strTpl = "我有%d个苹果\r\n";
	$str = sprintf($strTpl, $apple);
	print $str;
	print "\r\n";

	$strr = str_repeat($str, 5);
	print $strr;
	print strrev("abcd");
?>