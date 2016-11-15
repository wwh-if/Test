<?php
	// $res = eregi("[[:alpha:]]+", "hello world", $matches);
	// var_dump($res);
	// var_dump($matches);

	// $res = eregi("([[:digit:]]+)[[:space:]]+([[:alpha:]]+)", "123456  abcd", $matches);
	// var_dump($res);
	// var_dump($matches);

	$res = eregi("abcd", "ABCD", $matches);
	var_dump($res);
	var_dump($matches);

	$res = ereg_replace("[a-zA-Z]", "X", "abcd1234abcd");
	var_dump($res);
?>