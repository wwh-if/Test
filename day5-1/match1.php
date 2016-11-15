<?php
	// $re = preg_match("/([0-9]+)([a-zA-Z]+)/", "12345abcde", $matches);
	// var_dump($re);
	// var_dump($matches);

	// $re = preg_match_all("/\b\w+\b/", "hello world php", $matches);
	// var_dump($re);
	// var_dump($matches);

	// $re = preg_match_all("|<p>◎译　　名　(\S+)</p>|", "<p>◎译　　名　父辈的旗帜</p>", $matches);
	// var_dump($re);
	// var_dump($matches[1][0]);
	
	// $re = preg_match_all("@https?://(\S+.(?:com|net|org))\S+(?:.html)$@", "http://www.baidu.com/abc.html", $matches);
	// var_dump($re);
	// var_dump($matches);

	$re = preg_match_all("|\x{4e00}-\x{9fa5}|U", "中国", $matches);
	var_dump($re);
	var_dump($matches);


?>