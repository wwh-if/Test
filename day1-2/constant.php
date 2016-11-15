<?php
define("PI", 3.14, true);
//$dbool = defined("PI");
//var_dump($dbool);

//如果定义了PI，啥事不干
//如果没有定义PI,我们就定义一次
if (defined("PI")) {
	
} else {
	define("PI", 3.1415);
}

print PI * 5;
print "<br />";
print constant("PI") * 5;
print "<br />";
print "PI";
print "<br />";

?>