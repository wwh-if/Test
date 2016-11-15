<?php
	$ids = "1-2-3-4-5-6";
	$idarr = explode("-", $ids, 3);
	var_dump($idarr);

	$arr1 = [
		'hello', 'world', 'PHP', '语言'
	];
	$str2 = implode("\r\n", $arr1);
	var_dump($str2);
?>