<?php
	$filepath = "day5-5/basename.php";
	//文件名部分
	print basename($filepath, ".php");
	print "\r\n";
	//目录部分
	print dirname($filepath) . DIRECTORY_SEPARATOR."\r\n";
	// abc.123.72.rar
	//获取文件扩展名第一种方法。
	$str = "abc.123.72.rar";
	var_dump(strrchr($str, '.'));
	//第二种方法
	$arr = explode(".", $str);
	print "." . end($arr);
	// print current($arr) . "\r\n";
	// print next($arr) . "\r\n";
	// print next($arr) . "\r\n";
	// print next($arr) . "\r\n";
	//第三种方法
	print "." . pathinfo($str, PATHINFO_EXTENSION) . "\r\n";
?>

