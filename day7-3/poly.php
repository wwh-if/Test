<?php
	class IMath {

		function add($a, $b) {
			if (gettype($a) == "integer" && gettype($b) == "integer") {
				return $this->addInt($a, $b);
			}
			if (gettype($a) == "double" && gettype($b) == "double") {
				return $this->addDouble($a, $b);
			}
		}

		function addInt($a, $b) {
			return intval($a + $b);
		}

		function addDouble($a, $b) {
			return sprintf("%.2f", $a + $b);
		}

	}

	$MathObj = new IMath();
	print $MathObj->add(100, 50) . "\r\n";
	print $MathObj->add(100.1, 50.2) . "\r\n";
?>