<?php
	session_start();
	var_dump(session_name());
	var_dump(session_id());
	$_SESSION['a'] = 'helloworldaaa';
	$_SESSION['b'] = 200;
	setcookie(session_name(), session_id(), 0, "/");
?>