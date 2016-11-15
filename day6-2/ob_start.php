<?php
	ob_start();
	echo "hello";
	$out1 = ob_get_contents();
	echo "hello world";
	$out2 = ob_get_contents();
	ob_end_clean();
	var_dump($out1, $out2);
?>