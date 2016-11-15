<?php
	$a = 10;
	$b = 20;
	
	function func1() {
		print $a;
		print "<br />";
		global $b;
		print $b;
		print "<br />";
		
	}
	func1();
	$b = 200;
	func1();
?>