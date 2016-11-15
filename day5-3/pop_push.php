<?php
	$arr = ["orange", "banana", "apple", "raspberry"];
	$res = array_pop($arr);
	var_dump($res);
	var_dump($arr);
	array_push($arr, "grape");
	var_dump($arr);
	array_unshift($arr, "banana");
	var_dump($arr);
?>