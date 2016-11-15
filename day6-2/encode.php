<?php
	$encode = urlencode("s abc 中文");
	print $encode . "\r\n";
	$decode = urldecode($encode);
	print $decode . "\r\n";
	$rawencode = rawurlencode("s abc 中文");
	print $rawencode . "\r\n";
	// $rawdecode = rawurldecode($rawencode);
	$rawdecode = rawurldecode($encode);
	print $rawdecode . "\r\n";
?>