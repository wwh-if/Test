<?php
	function metric(&$m) {
		$m = $m * 5 + 10;
		print "在函数内部,\$m=" . $m;
		print "<br>";
	}
	$m = 3;
	metric($m);
	print "在函数外部，执行完函数后,\$m=" . $m;