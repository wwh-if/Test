<?php
	$userlist = [
		'abc',
		'zhangsan',
		'szh'
	];
	//检查用户名
	function check_username($username, $userlist) {		
		$message = [
			'status' => '',
			'message' => ''
		];
		if (empty($username) || strlen($username) < 3) {
			$message['status'] = 20001;
			$message['message'] = "请输入至少3位的用户名";
		} else {
			$sres = array_search($username, $userlist);
			// var_dump($sres);
			if ($sres !== false) {
				$message['status'] = 20002;
				$message['message'] = "用户名已存在，请修改";
			}
		}
		return $message;
	}
?>