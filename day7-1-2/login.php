<?php
	//假定从数据库获取的数据
	$userinfo = [
		'username' => 'zhangsan',
		'password' => md5('abc123'),
		'uid' => 1001
	];
	var_dump($userinfo);
	//匹配操作已完毕
	//生成通行证
	setcookie("user", $userinfo['username'], time() + 3600);
	setcookie("idpass", md5($userinfo['uid'] . $userinfo['password']), time() + 3600);
?>