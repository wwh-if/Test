<?php
	/*
	function recursive_sum($n) {
		if ($n > 0) {
			return $n + recursive_sum($n - 1);
		} 
	}

	print recursive_sum(50);
	print "\r\n";
	print recursive_sum(100);

	*/

	function suma($n, $m = 0) {
		if ($m == 0) {
			return suma($m + 1, $n);
		} else {
			if ($n <= $m) {
				return $n + suma($n+1, $m);
			}
		}
	}

	print suma(50);