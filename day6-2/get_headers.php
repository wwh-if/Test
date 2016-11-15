<?php
	$url = "http://www.jd.com";
	$headers = get_headers($url);
	var_dump($headers);
	$metas = get_meta_tags($url);
	var_dump($metas);

	//http://www.abc.com/search.php?type=war&country=中国&year=2015&actor=王宝强&director=刘德华
	$query = http_build_query([
		'type' => 'war',
		'country' => '中国',
		'year' => 2016,
		'actor' => '王宝强',
		'director' => '刘德华'
		]);
	var_dump($query);

?>