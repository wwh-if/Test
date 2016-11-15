<?php
	// if(ini_get('session.auto_start') == 0) {
	// 	ini_set('session.auto_start', 1);
	// }
	//新版不能起作用了。从5.4.19之后被移除。不能通过用户脚本进行ini_set设定
	session_start();
	$user = $_SESSION['user'];
	// var_dump($user);
	// unset($_SESSION['user']);
	// $_SESSION = [];

	//清空变量
	$_SESSION = [];
	//删除SESSION文件
	session_destroy();

	print "SESSION值:" . $_SESSION['user'];
	// var_dump($user);
?>