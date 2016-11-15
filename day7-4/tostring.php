<?php
	class Toy {

		protected $name = "";

		public function __construct($name) {
			$this->name = $name;
		}

		public function __toString() {
			return $this->name . "\r\n";
		}
	}

	$toy = new Toy("Panda");
	// var_dump($toy);
	print $toy;
?>