<?php
	$arr = [1, 2, 3, 4, 5];
	$arr2 = array_reduce($arr, "xx", 9);
	var_dump($arr2);

	function xx($a1, $a2) {
		var_dump($a1);
		return $a1 . "-" . $a2;
	}
?>