<?php
	$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
	array_walk($fruits, "test_print");

	array_walk($fruits, "modify");

	function test_print($value, $key) {
		// var_dump($value);
		// var_dump($key);
		print $key . ":" . $value . "\r\n";
	}

	function modify(&$value, $key) {
		$value = "@" . $value;		
	}

	var_dump($fruits);
?>