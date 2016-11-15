<?php
	$sum = 0;
	for ($i = 10; $i <= 20; $i++) {
		if ($i % 3 === 0) {
			$sum++;
			continue;
		}
		print "只有除以3有余数的值才能显示：" . $i . "<br>";
	}
	print $sum . "<br>";
?>