<?php
	session_start();
	$_SESSION['user'] = 'zhangsan||;;;';
	$_SESSION['age'] = 18;
	$_SESSION['houses'] = ['one'=>'1号', 'tow'=>'2号', 'thee' => 10001, 100 => 200];
	var_dump($_SESSION['user']);
?>