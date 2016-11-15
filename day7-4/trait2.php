<?php
	trait Tools {

		protected $box = "盒子装螺丝装螺丝帽";

		//刀
		public function knife() {

		}

		//螺丝刀
		public function screwdriver() {
			echo "screwdriver";
		}

		//扳手，如果是static调用，那就不能再用$this
		public function wrench() {
			// $this->wrench12();
			// $this->wrench14();
		}

		public function wrench12() {
			
		}

		public function wrench14() {
			
		}
	}

	class FixBicycle {

		use Tools;
		public function screw() {
			$this->screwdriver();
		}
	}

	$Fix = new FixBicycle();
	$Fix->screw();
?>