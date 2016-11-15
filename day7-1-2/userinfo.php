<?php
	$user = !empty($_COOKIE['user']) ? $_COOKIE['user'] : "";
	$uid = !empty($_COOKIE['uid']) ? $_COOKIE['uid'] : "";
	$idpass = !empty($_COOKIE['idpass']) ? $_COOKIE['idpass'] : "";
	//跟我们的数据库做对比
	//数据库查询结果
	$userinfo = [
		'username' => 'zhangsan',
		'password' => md5('abc123'),
		'uid' => 1001
	];
	var_dump($_COOKIE);
	var_dump($user);
	var_dump($uid);
	if ($user == $userinfo['username'] && $idpass == md5($userinfo['uid'] . $userinfo['password'])) {
		echo "通过";
		//其他操作
	} else {
		echo "验证出错";
		die();
	}

	//用第二种方式，直接检查加密后的COOKIE，解密后是否能还原
	if (func1($_COOKIE['idpass']) == "") {

	} 


?>
<h1>
	Hello: <?php echo $_COOKIE['user']; ?>
</h1>