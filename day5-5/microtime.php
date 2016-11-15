<?php
	$mt = microtime(true);
	print $mt . "\r\n";

	$start_time = microtime(true);
	$sum = 0;
	for($i = 0; $i < 10000000; $i++) {
		$sum += $i;
	}
	print $sum . "\r\n";
	$end_time = microtime(true);
	printf("总共花费秒数：%.4f", ($end_time - $start_time));
?>