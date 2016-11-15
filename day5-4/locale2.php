<?php
	setlocale("LC_TIME", "Japanese_Japan");
	// print "今天是星期几:" . iconv("Big5", "UTF-8", strftime("%A"));
	print "今天是星期几:" . iconv("Shift_JIS", "UTF-8", strftime("%A"));

	file_put_contents("w.txt", strftime("%A"));
?>