<?php
	$res = strpos("Hello World", "H");
	var_dump($res);
	if ($res !== false) {
		echo "存在H！";
	} else {
		echo "不存在";
	}
	
	$zi = 5 / 0;
	print $zi;
	print "我还在这里";
