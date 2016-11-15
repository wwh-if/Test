<?php
	//引入加解密文件
	include "authcode.php";

	$userinfo = [
		'uid' => 1001,
		'username' => 'zhangsan',
		'password' => md5('abcd1234')
	];
	//对比完成之后，设置COOKIE，当通行证
	setcookie("user", $userinfo['username']);
	setcookie("token", authcode($userinfo['username'], "ENCODE", $key));
?>