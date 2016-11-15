<?php
	// print date("Y-m-d H:i:s");
	// print "\r\n";
	// print date(DATE_ISO8601);
	// print "\r\n";

	$dateObj = new Datetime('', new DateTimeZone("Asia/Shanghai"));
	var_dump($dateObj->format("Y-m-d H:i:s"));

	$dateObj = new Datetime('', new DateTimeZone("America/Los_Angeles"));
	var_dump($dateObj->format("Y-m-d H:i:s"));
	// print DATE_ISO8601;
	// print "\r\n";

	for ($i = 1; $i <= 14; $i++) {
		$dateObj = new Datetime('', new DateTimeZone("Etc/GMT-" . $i));
		var_dump($dateObj->format("Y-m-d H:i:s"));
	}
?>