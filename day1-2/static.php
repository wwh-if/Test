<?php
	
	function sfunc() {
		static $i = 1;
		print "调用了" . $i . "次<br>";
		$i++;
	}
	
	sfunc();
	sfunc();
	sfunc();
	sfunc();
	sfunc();
	sfunc();
	sfunc();
?>