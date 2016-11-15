<?php
	// final class Hotpot {
	class Hotpot {

		protected $banner = "中国火锅出重庆";

		final public function cook() {
			print "Cook";
		}
	}


	class ScHotpot extends Hotpot {

		public function price () {
			print "锅底50元，配菜自选\r\n";
		}

		public function cook() {
			print "火开之后再下菜";
		}
	}

	$Huoguo = new Hotpot();
	var_dump($Huoguo);


?>