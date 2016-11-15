<?php
	print addcslashes("hello world", "h") . "\r\n";
	print stripcslashes('\hello world'). "\r\n";
	print strlen(null) . "\r\n";
	print strlen(false) . "\r\n";
	print strlen(true) . "\r\n";
	print substr("hello world", 0, 7) . "\r\n";
	print substr("中华人民共和国", 0, 12) . "\r\n";
	print mb_substr("中国人民共和国", 0, 5). "\r\n";
	print mb_substr("hello world", 0, 4). "\r\n";