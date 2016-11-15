<?php
	for ($i = 1; $i <= 9; $i++) {
		echo $i . "\r\n";
		sleep(1);
		ob_flush();
    	flush();
    }
?>