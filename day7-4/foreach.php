<?php
	class Person {
		public $name = "张三";
		protected $address = "郑州市**街道**栋*层";
		private $age = 28;

		public function readage() {
			print $this->age;
		}
	}

	$p = new Person();
	var_dump($p);
	foreach ($p as $key => $value) {
		print $key . " => " . $value;
	}
?>