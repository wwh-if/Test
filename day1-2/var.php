<?php
	$a = 3;
	print $a;
	print "<br />";
	$b = $a;
	$c = &$a;
	print $b;
	print "<br />";
	print $c;
	$a = 4;
	print "<br />";
	print $b;
	print "<br />";
	print $c;
?>