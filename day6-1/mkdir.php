<?php
	// !is_dir("a")  && mkdir("a");
	// if (!is_dir("a")) {
	// 	mkdir("a");
	// }
	
	// is_dir("a") || mkdir("a");

	// mkdir("a/b/c/d/e", 0, true);

	//递归创建目录
	function recuresive_mkdir($path) {
		if (empty($path)) {
			return false;
		}
		$arr = explode("/", $path);
		// $first_dir = current($arr);
		$first_dir = $arr[0];
		var_dump($first_dir);
		mkdir($first_dir);
		array_shift($arr);
		if (empty($arr)) {
			return false;
		}
		$pathnew = implode("/", $arr);
		chdir($first_dir);
		recuresive_mkdir($pathnew);
	}

	recuresive_mkdir("a/b/c/d/e");

	


?>