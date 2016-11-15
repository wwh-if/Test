<?php
	$i = 10;
	while(true) {
		print "本次i的值：" . $i . "<br>";
		if ($i % 21 === 0) {
			print "大于10能被3整除的最小数：" . $i . "<br>";
			break;
		}
		$i++;
	}
?>