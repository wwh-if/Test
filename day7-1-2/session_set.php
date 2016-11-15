<?php
	$res = ini_set("session.gc_maxlifetime", 60);
	var_dump($res);
	var_dump(ini_get("session.gc_maxlifetime"));
	session_start();
	$_SESSION['visit'] = 10001;
?>