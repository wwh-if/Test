<?php
	$str = "都实名制了，怎么还有那么多诈骗电话，原来是黑卡在作祟。";
	$str2 = str_replace("诈骗", "XX", $str);
	$str3 = str_replace(['诈骗','电话', '黑卡'], ['XX','手机', '白卡'], $str);
	// $str3 = str_replace(array('诈骗','电话'), array('XX','手机'), $str);
	print $str2;
	print "\r\n";
	print $str3. "\r\n";
	$str4 = str_replace("么", "XX", $str);
	print $str4 . "\r\n";
	$str5 = substr_replace($str, "[我是新的字符串]", 9, 21);
	print $str5 . "\r\n";

	$str22 = "abcd12345ABCDxyz";
	$str23 = str_ireplace("abcd", "hijk", $str22);
	print $str23 . "\r\n";
	
?>