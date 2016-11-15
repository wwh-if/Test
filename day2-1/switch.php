<?php
	if ($_SERVER['argc'] >= 2) {
		$name = $_SERVER['argv'][1];
	} else {
		print "请输入用户名";
		exit();
	}
	var_dump($name);
	switch ($name) {
		case '张三':
			print "VIP客户，请进！";
			break;
		case '李四':
			print "请前台交费，办理会员卡";
			break;
		case '王五':
			print "大刀客请留步！";
			break;
		case '赵六':
			print "工作人员请走侧门";
			break;
		default:
			print "今天歇业，非预约不让进";
			break;
		
	}
?>