<?php
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [6, 7, 8, 9, 10];

	var_dump(array_filter($arr1, "odd"));
	var_dump(array_filter($arr2, "even"));

	function odd($var) {
		if ($var % 2) {
			return true;
		}
		return false;
	}

	function even($var) {
		if ($var % 2 == 0) {
			return true;
		}
		return false;
	}
?>