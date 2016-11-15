<?php
	$handle = fopen("1.txt", "a+");
	fwrite($handle, "\r\nhello");
	fclose($handle);
?>