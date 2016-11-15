<?php
	$sum = 0;
	$i = 1;
	
	do {
		print $i . "\r\n";
		sleep(1);
		$sum += $i; // $sum = $sum + $i;
		$i++; // $i = $i + 1;
	} while($i <= 50);
	print $sum;
?>