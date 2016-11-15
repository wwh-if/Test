<?php
	class SportObject {
		public $sponsor = "河南电视台";
		public static $banner = "欢迎加入篮球世界";


		const CLUB = "CBA";

		function __construct($type) {
			print "欢迎光临" . self::CLUB . "俱乐部\r\n";
			print "送你一个{$type}类型的POLO衫\r\n";
		}

		function givePrize($type) {
			
		}

		function beatBasketball($name, $height, $weight, $age, $sex) {
			print "姓名：" . $name . "\r\n";
			print "身高：" . $height . "\r\n";
			print "体重：" . $weight . "\r\n";
			print "年龄：" . $age . "\r\n";
			print "性别：" . $sex . "\r\n";
			print "赞助商：" . $this->sponsor . "\r\n";
			print "俱乐部：" . self::CLUB .  "\r\n";
		}

		static function printBanner () {
			print self::$banner . "\r\n";
		}
		function __destruct() {
			print "请于下周一过来训练，今天我们只招人。\r\n";
		}
	}

	$SportObject = new SportObject("白色");
	$SportObject->beatBasketball("张三", 181, 75, 22, "男");
	print $SportObject->sponsor . "\r\n";
	print SportObject::CLUB . "\r\n";
	print $SportObject::CLUB . "\r\n";
	//不用实例化，直接调用类中的静态属性。
	print SportObject::$banner . "\r\n";
	//不用实例化，直接调用类中的静态方法。
	print SportObject::printBanner();
?>