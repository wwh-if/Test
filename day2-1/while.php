<?php
	//求1到50的和
	/*
	$sum = 0;
	for ($i = 1; $i <= 50; $i++) {
		$sum += $i;
	}
	print $sum;
	*/
	
	$sum = 0;
	$i = 1;
	while ($i <= 50) {
		print $i . "\r\n";
		sleep(1);
		$sum += $i; // $sum = $sum + $i;
		$i++; // $i = $i + 1;
	}
	print $sum;
	
	
?>