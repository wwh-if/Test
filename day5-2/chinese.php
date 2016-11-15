<?php
	$regex = "/[\x0391-\xffe5]+/";
	$str = "中文中國一萬";
	$res = preg_match_all($regex, $str, $matches);
	var_dump($res);
	var_dump($matches);
?>