<?php
	$userlist = [
		'abc',
		'zhangsan',
		'szh'
	];

	$username = !isset($_GET['username']) ? $_GET['username'] : '';
	$message = [
		'status' => '',
		'message' => ''
	];
	if (empty($username) || strlen($username) < 3) {
		$message['status'] = 20001;
		$message['message'] = "请输入至少3位的用户名";
	} else {
		$sres = array_search($username, $userlist);
		if ($sres) {
			$message['status'] = 20002;
			$message['message'] = "用户名已存在，请修改";
		}
	}
	echo json_encode($message, JSON_UNESCAPED_UNICODE);

	//form.html写一个form表单，完成注册。包含用户名，密码，重复密码，邮箱
	//验证：1.用户名不能少于3位，而且光标离开之，AJAX验证，跟后台的userlist不能重复。
	//2.密码不能少于6位，重复密码要跟密码一致。
	//3.邮箱要正则验证。
	//4.前端验证完成后，POST提交到后台。
	//5.后台完成上述1,2,3相同的验证。
	//6.验证完成后，把提交的POST数据，追加到reguser.txt文件里。
?>