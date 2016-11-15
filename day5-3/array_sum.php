<?php
	$arr = [1, 2, 3, 4, 5];
	$sum = array_sum($arr);
	var_dump($sum);
	$product = array_product($arr);
	var_dump($product);

	$arr2 = [
		'a' => 10,
		'b' => 20,
		'c' => 20
	];
	$flip = array_flip($arr2);
	var_dump($flip);
