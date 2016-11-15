<?php
	$suggests = [
		'张三',
		'张三丰',
		'张三的歌',
		'张三的舞蹈',
		'张三结婚了',
		'张译',
		'张横'
	];
	$keyword = !empty($_GET['kw']) ? $_GET['kw'] : "";
	if (empty($keyword)) {
		echo "请输入关键字";
		die();
	}
	$res = search($keyword, $suggests);
	echo implode(", ", $res);
	
	function search($str, $arr) {
		$res = [];
		foreach ($arr as $key => $value) {
			if (strpos($value, $str) !== false) {
				$res[$key]= $value;
			}
		}
		return $res;
	}


?>