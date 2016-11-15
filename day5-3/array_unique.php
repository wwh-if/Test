<?php
	$arr = [65, 85, 85, 65, 93, 74];
	$unique = array_unique($arr);
	var_dump($unique);

	//不能对二维数组起作用
	$arr2 = [
		[100, 200], [100, 200]
	];
	$unique2 = array_unique($arr2);
	var_dump($unique2);
?>