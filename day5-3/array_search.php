<?php
	$arr1 = [1, 2, 3, 4, 4, 5];
	$res = array_search(4, $arr1);
	var_dump($res);

	foreach ($arr1 as $key => $value) {
		if ($value == 4) {
			print $key;
			break;
		}
	}
	print "\r\n";
	print "查找4：" . arr_search(4, $arr1);

	function arr_search($needle, $haystack) {
		$index = "";
		foreach ($haystack as $key => $value) {
		if ($value == $needle) {
				$index = $key;
				break;
			}
		}
		return $index;
	}
?>