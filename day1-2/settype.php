<?php
	$foo = "5bar";
	$bar = true;
	
	settype($foo, "integer");
	settype($bar, "string");
	var_dump($foo);
	var_dump($bar);
	print "---".(string)$bar . "---";
?>