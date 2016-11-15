<?php
	// $filename = "1.txt";
	$filename = __DIR__;
	var_dump($filename);
	print date("Y-m-d H:i:s", fileatime($filename)) . "\r\n";
	print date("Y-m-d H:i:s", filemtime($filename)) . "\r\n";
	// 文件大小，字节。
	print filesize($filename) . "\r\n";
	print filetype($filename) . "\r\n";


	
?>