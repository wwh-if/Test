<?php
define("PI", 3.14, true);
//$dbool = defined("PI");
//var_dump($dbool);

//���������PI��ɶ�²���
//���û�ж���PI,���ǾͶ���һ��
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