<?php
	$str = '<div><img src="http://tu.23juqing.com/d/file/html/gndy/dyzz/2016-08-09/ff7a32e13ae2bd3ef5fbe10008eef924.jpg" alt="电影天堂www.dy2018.com奇幻森林BD中英双字.rmvb_thumbs_2016.08.09.00_29_04.jpg" height="857" width="926"></div>';
	$regex = "#<img\s+src=(?:\"|\')(\S+.(?:jpg|gif|jpeg|png))(?:\"|\')#";
	$res = preg_match_all($regex, $str, $matches);
	var_dump($res);
	var_dump($matches);
	$img = $matches[1][0];
	print $img;
	$dest = __DIR__ . "/abc.jpg";
	copy($img, $dest);
?>
