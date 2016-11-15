<?php
	$arr = [
		'firstName' => '洞主',
		'lastName' => '张'
	];
	$encode = json_encode($arr, JSON_UNESCAPED_UNICODE);
	var_dump($encode);
	$decode = json_decode($encode, true);
	var_dump($decode);
?>