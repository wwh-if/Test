<?php
	include "check_user_common.php";
	$username = isset($_GET['username']) ? $_GET['username'] : '';
	$message = check_username($username, $userlist);
	echo json_encode($message, JSON_UNESCAPED_UNICODE);

	//form.html写一个form表单，完成注册。包含用户名，密码，重复密码，邮箱
	//验证：1.用户名不能少于3位，而且光标离开之，AJAX验证，跟后台的userlist不能重复。
	//2.密码不能少于6位，重复密码要跟密码一致。
	//3.邮箱要正则验证。
	//4.前端验证完成后，POST提交到后台。
	//5.后台完成上述1,2,3相同的验证。
	//6.验证完成后，把提交的POST数据，追加到reguser.txt文件里。
?>