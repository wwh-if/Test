<?php
	print strcmp("21", "100") . "\r\n";
	print strcasecmp("ABCD", "abcd") . "\r\n";
	// print ord('x') . "\r\n";
	// print ord('X') . "\r\n";
	/*
	print PHP_VERSION;
	if (strcmp(PHP_VERSION, "5.3")) {
		echo "PHP版本支持，请继续安装";
	} else {
		echo "请升级PHP版本";
	}
	*/
	print strstr("hello world", "q") . "\r\n";
	print substr_count("长长长长豆芽长长", "长") . "\r\n";
	$str2 = "hello world aaaaaaaa";
	print substr($str2, strpos($str2, "h")) . "\r\n";

	$action = "post|get|put|delete|header";
	$do = "post";
	if (strpos($do, $action) !== false) {
		print "继续操作";
	} else {
		print "拒绝的方法";
	}
	print "\r\n";
	print $str2{6};
?>