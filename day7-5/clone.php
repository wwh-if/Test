<?php
	class Goods {

		protected $name;
		protected $desc;

		public function setName($name) {
			$this->name = $name;
		}

		public function __clone() {
			print "Hello World!\r\n";
			$this->desc = "这是沙发椅\r\n";
		}
	}

	$ChairObj = new Goods();
	$ChairObj->setName("椅子");
	var_dump($ChairObj);
	$SofaChairOBj = clone $ChairObj;
	$SofaChairOBj->setName("沙发椅");
	var_dump($ChairObj);
	var_dump($SofaChairOBj);
?>