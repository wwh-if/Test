<?php
	$arr = [
		'firstName' => '洞主',
		'lastName' => '张'
	];
	//把数组内容打印到日志
	$str = var_export($arr, true);
	file_put_contents("log.txt", $str);
	$str2 = file_get_contents("log.txt");
	var_dump($str2);
	//字符串转数组
	eval("\$arr2 = $str2;");
	var_dump($arr2);

	//保存数组的第二种方式
	$str_json = json_encode($arr, JSON_UNESCAPED_UNICODE);
	file_put_contents("json.txt", $str_json);
	$str_json2 = file_get_contents("json.txt");
	var_dump($str_json2);
	$arr_json = json_decode($str_json2, true);
	var_dump($arr_json);
?>