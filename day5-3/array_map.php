<?php
	$arr = [1, 2, 3, 4, 5];
	$arr2 = array_map("callback", $arr);
	var_dump($arr2);

	function callback($n) {
		return $n * $n;
	}