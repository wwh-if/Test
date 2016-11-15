<?php
	var_dump($_POST);
	die();

	$n = floatval($_POST['n']);
	if (empty($n)) {
		echo "请输入有效的半径";
		die();
	}
	$square = 3.14 * pow($n, 2);
	printf("半径是%s的圆的面积是%.4f", $n, $square);
?>