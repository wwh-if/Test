<?php

	class Family {
		public $banner = "幸福的一家";
		protected $dog = "边牧";
		protected static $cat = "缅甸猫";
		private $computer = "我的电脑";

		public function touchDog() {
			print "摸一下狗，狗的品种是" . $this->dog . "\r\n";
		}

		public function exchangeDog($dog) {
			$this->dog = $dog;
		}

		public function userComputer() {
			print $this->computer . "\r\n";
		}

		protected function desk () {
			print "明清徽派桌子\r\n";
		}

		private function _toothbrush() {
			print "我的牙刷不让碰\r\n";
		}

		public static function sayHello() {
			print "Hello!\r\n";
		}
	}

	class FFamily extends Family {

		public function seeDog() {
			print $this->dog . "\r\n";
			// print $this->computer;
			print $this->banner . "\r\n";
			print $this->userComputer();
			print $this->desk();
			// print $this->_toothbrush();
			// parent::_toothbrush();
			print parent::$cat ."\r\n";
			//静态调用方法，不推荐用$this->静态方法
			self::sayHello();
			parent::sayHello();
		}
	}

	$myfamily = new Family();
	print $myfamily->banner . "\r\n";
	//不能直接访问protected属性
	// print $myfamily->dog . "\r\n";
	//不能直接访问private属性
	// print $myfamily->computer . "\r\n";
	$myfamily->touchDog();
	$myfamily->exchangeDog("雪纳瑞");
	$myfamily->touchDog();
	$myfamily->userComputer();
	$myfamily::sayHello();
	Family::sayHello();

	$F = new FFamily();
	$F->seeDog();
?>