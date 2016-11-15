<?php
	$arr = [1, 2, 3, 4];
	foreach ($arr as $key => $val) {
		if ($val % 2) {
			print "这是个<b>奇数</b>吧";
		} else {
			print "这是个</b>偶数</b>";
		}
	}
	
?>