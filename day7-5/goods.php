<?php
	class Goods {

		protected $name;

		public function setName($name) {
			$this->name = $name;
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