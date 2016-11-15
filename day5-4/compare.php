<?php
	$d1 = "2016-08-11";
	$d2 = "2016-8-10";
	var_dump($d1 > $d2);
	var_dump(strcmp($d1, $d2));
	var_dump(strtotime($d1) > strtotime($d2));
	var_dump(strtotime($d1) - strtotime($d2));
?>