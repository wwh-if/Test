<?php
	$a = 21;
	$b = 9;
	$a += $b;
	print $a;
	print "<br>";
	$a -= 3;
	print $a;
	print "<br>";
	$a *= 2;
	print $a;
	print "<br>";
	$a /= 9;
	print $a;
	print "<br>";
	$a %= 5;
	print $a;
	print "<br>";
	
	$str = "";
	for($i = 1; $i <= 9; $i++){
		$str .= ($i . "-");
	}
	print $str;
?>