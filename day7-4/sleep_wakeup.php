<?php
	class Person {
		public $name = "张三";
		protected $address = "郑州市**街道**栋*层";
		private $age = 28;
		protected $pearl = "";
		protected $a = "";

		//想来我家看珍珠，你要告诉我，你看第几个。
		public function __construct($type) {
			$this->pearl = $type;
			$this->a = $type;
			$this->seePearl();
		}

		public function readage() {
			print $this->age;
		}

		//看珍珠
		public function seePearl() {
			print "看珍珠" . $this->pearl . "\r\n";
		}

		public function __sleep() {
			print "__sleep\r\n";
			//return $this->pearl;
			return ['a', 'pearl'];
		}

		public function __wakeup() {
			print "__wakeup\r\n";
			$this->seePearl();
		}
	}

	//1. 你来我家看珍珠的时候，你告诉我要看第20颗。
	//2. 有外人过来，我需要打包，相当于序列化。
	//3. 序列化的时候，把珍珠收起来了，同时珍珠的值也载入了__sleep,相当于记在我的脑子了，为的是等会再拆包的的时候，我知道你要看哪一颗珍珠。
	//4. 拆包的时候，我脑袋你记得你要看哪颗珍珠了。对象还是是打包之前的对象的状态。
	$p = new Person(20);
	$serial = serialize($p);
	var_dump($serial);
	$unserial = unserialize($serial);
	var_dump($unserial);
	$unserial->readage();
?>