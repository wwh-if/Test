<?php
	$str = file_get_contents("http://pp.163.com/5501188/pp/18004008.html");
	// $regex = "#<img(?:\s\S)+\ssrc=(?:\"|\')(\S+\.(?:jpg|gif|jpeg|png))(?:\"|\')#s";
	$regex = "#data-lazyload-src=(?:\"|\')(\S+\.(?:jpg|gif|jpeg|png))(?:\"|\')#";
	$res = preg_match_all($regex, $str, $matches);
	var_dump($res);
	var_dump($matches);
	foreach ($matches[1] as $key => $value) {
		 copy($value, __DIR__. "/pic/" . date("His").rand(10, 99) . ".jpg");
	}
?>
