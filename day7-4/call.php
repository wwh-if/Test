<?php
	class Action {

		public function walk() {

		}
		public function run() {

		}

		public function __call($name, $args = []) {
			// var_dump($name);
			// var_dump($args);
			// print "{$name}方法不存在\r\n";
			// print implode("-", $args);
			$this->work($args);
		}

		public function work($args) {
			printf("%s去%s工作%s小时\r\n", $args[0], $args[1], $args[2]);
		}


		// public static blink() {
		// 	print "眨眼睛\r\n";
		// }

		public static function __callStatic($name, $args=[]) {
			print "眨眼睛\r\n";
		}
	}

	$Action = new Action();
	//调用一个不存在的睡觉方法
	$Action->sleep("上午", "公园", 2);
	//参数个数不对，会报错。如果害怕出错，建议__call调用的函数不加参数
	// $Action->aaa();

	Action::blink();
?>