<?php
	$res = ini_set("session.gc_maxlifetime", 60);
	session_start();
	var_dump($_SESSION);
?>