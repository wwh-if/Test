<?php
	// $str = "打发斯蒂芬\r\n
	//                   \r\n
	// 爱对方的三分\r\n
	// 爱的是范德萨范德萨\r\n
	// 大师傅的\r\n
	// 大师傅的";
	// $re = preg_match_all("/(\n[\s| ]+)+/", $str, $matches);
	// var_dump($re);
	// var_dump($matches);

	// $re = preg_match_all("/\w+/", "abcd1234_", $matches);
	// var_dump($re);
	// var_dump($matches);

	$str2 = "
	adfdsfsdfdfkfdjl
	asdfdsfdsfdsfdsfsa
	123456789\r\naaa
	123456ADSFDSFDSFFDSA
	";
	$re = preg_match_all("/\d+\r\n[a-z]+/s", $str2, $matches);
	var_dump($re);
	var_dump($matches);

?>