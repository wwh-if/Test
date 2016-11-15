<?php
	function &idefine($tmp = 0){
		return $tmp;
	}
	
	$str = &idefine("看到了");
	print $str;
	
	function &test(){
		static $b = 0;//申明一个静态变量
		$b = $b + 1;
		echo $b . "<br>";
		return $b;
	}
	//$a = test();//这条语句会输出　$b的值　为１
	//$a = 5;
	//$a = test();//这条语句会输出　$b的值　为2

	$a = &test();//这条语句会输出　$b的值　为3
	$a = 5;
	$a = test();//这条语句会输出　$b的值　为6