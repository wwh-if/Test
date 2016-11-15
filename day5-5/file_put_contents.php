<?php
	// file_put_contents("1.txt", "张三修改了订单\r\n", FILE_APPEND);
	// file_put_contents("1.txt", "李四修改了订单\r\n", FILE_APPEND);

	// filelog("王五申请取消订单");

	$arr = ['name' => '张三', 'money' => 102.10];
	$arr['money'] = $arr['money'] - 50;
	filelog($arr);

	function filelog($message) {
		//如果是字符串...，如果是数组...
		if (is_string($message)) {
			//
		} else if (is_array($message)) {
			$message = var_export($message, true);
		}
		$logfile = "log.txt";
		$str = sprintf("[%s] %s\r\n", date("Y-m-d H:i:s"), $message);
		file_put_contents($logfile, $str, FILE_APPEND);
		return true;
	}