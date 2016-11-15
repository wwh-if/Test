<?php
	$m = 0b10;
	$n = 0b11;
	printf("二进制：%b", ~ $n);
	echo "<br>";
	$x = sprintf("%b", ~ $n);	
	echo strlen($x);
	echo "<br />";
	printf("十进制：%d", ~ $n);
?>