<?php
	$username = !empty($_POST['username']) ? $_POST['username'] : "";
	$password = !empty($_POST['password']) ? $_POST['password'] : "";
	$verify = !empty($_POST['verify']) ? $_POST['verify'] : "";
	$email = !empty($_POST['email']) ? $_POST['email']: "";

	include "check_user_common.php";
	$check_message = check_username($username, $userlist);
	if ($check_message['status'] != 200) {
		echo json_encode($check_message, JSON_UNESCAPED_UNICODE);
		die();
	}
	$message = check_data();
	if ($message['status'] != 200) {
		echo json_encode($message, JSON_UNESCAPED_UNICODE);
		die();
	} else {
		file_put_contents("reguser.txt", var_export($_POST, true));
		echo json_encode([
			'staut' => 200,
			'message' => '注册成功'
			], JSON_UNESCAPED_UNICODE);
	}

	function check_data($password, $verify, $email) {
		//验证代码
		$meesage = [
			'status' => '',
			'message' => '',
		];
		if (strlen($password) < 6 || strlen($verify) < 6) {
			$message['stauts'] = 30001;
			$message['message'] = '密码不能少于6位';
			return $message;
		}
		if (preg_match("#^\w{3,20}@[a-zA-Z0-9]+\.(com|net|org|cn)$#", $email) === false) {
			$message['stauts'] = 30002;
			$message['message'] = '邮箱格式不对';
			return $message;
		}
		return $message;
	}
?>