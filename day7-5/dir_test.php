<?php
	include "Dir.php";
	// Dir::create("abc");
	$list = Dir::lists(__DIR__);
	// var_dump($list);
	$res = Dir::copy("autoload", "auotoload_2");

	$tree = Dir::tree(__DIR__);
	// var_dump($tree);
	Dir::delete("a");
?>