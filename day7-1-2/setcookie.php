<?php
	$time = time();
	$expire = $time + 60;
	setcookie("user", $time, $expire);
	sleep(1);
	var_dump($time);
	var_dump($_COOKIE);
?>