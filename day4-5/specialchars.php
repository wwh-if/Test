<?php
	$str = "<p>我说:'你是个好人'。你说:\"你才是个好人\"</p>";
	$str2 = htmlspecialchars($str, ENT_QUOTES);
	print $str2 . "\r\n";
	$str3 = htmlspecialchars_decode($str2, ENT_QUOTES);
	print $str3 . "\r\n";
	$str4 = htmlentities($str, ENT_QUOTES);
	print $str4 . "\r\n";
?>