<?php
	$str = file("abc.txt");
	var_dump($str);

	$str = file_get_contents("abc.txt");
	var_dump($str);