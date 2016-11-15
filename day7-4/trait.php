<?php
	class Tools {

		protected static $box = "盒子装螺丝装螺丝帽";

		//刀
		public function knife() {

		}

		//螺丝刀
		public function screwdriver() {
			echo "screwdriver";
		}

		//扳手，如果是static调用，那就不能再用$this
		public static function wrench() {
			// $this->wrench12();
			// $this->wrench14();
			self::wrench12();
			selft::wrench14();
		}

		public static function wrench12() {
			print self::$box;
		}
		public static function wrench14() {
			
		}
	}

	class FixBicycle extends Tools {

		public function screw() {
			$this->screwdriver();
		}
	}

	$Fix = new FixBicycle();
	$Fix->screw();
?>