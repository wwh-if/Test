<?php
	$url = "http://www.baidu.com/index.php?a=100&b=200&c=300&d=abcdef#download";
	$arr = parse_url($url, PHP_URL_PATH);
	var_dump($arr);
	var_dump(PHP_URL_PATH);

	$url = "ftp://j:j@g.dygod18.com:7978/寂静岭2BD中英双字[电影天堂www.dy2018.com].mp4";
	// $url = "http://g.dygod18.com:7978/寂静岭2BD中英双字[电影天堂www.dy2018.com].mp4";
	$arr = parse_url($url);
	var_dump($arr);
	$str = "abc !# 中文-&copy";
	$url_prefix = "http://www.baidu.com/s?wd=";
	var_dump($url_prefix . urlencode($str));
	var_dump($url_prefix . rawurlencode($str));
?>