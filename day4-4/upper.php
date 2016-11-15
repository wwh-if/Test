<?php
	print strtoupper("hello world!"). "\r\n";
	print ucfirst("hello world!") . "\r\n";
	print ucwords("hello world! aaa bbb") . "\r\n";

	print 'I\'m Lilei' . "\r\n";
	print "Lilei says:\"You are a good man\"" . "\r\n";
	$str1 = 'Lilei says:\"You are a good man\"';
	print $str1 . "\r\n";
	print stripslashes($str1) . "\r\n";
	$str2 = addslashes("I'm Lilei");
	print $str2 . "\r\n";
