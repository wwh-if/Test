<?php
	function tax($price, $tax = "") {
		$sum = $price + $price * $tax;
		return $sum;
	}
	$money = tax(1200);
	print $money;
	
	function rarray($name, $age, $gender) {
		return [
			'name' => $name,
			'age' => $age,
			'gender' => $gender
		];
	}
	$arr = rarray("张三", 24, "男");
	var_dump($arr);
	
	//可变函数
	function varfunc($a = 100) {
		print "这是一个函数" . $a;
		print "<br>";
	}
	$var  = "varfunc";
	$var();
	$var(200);
?>