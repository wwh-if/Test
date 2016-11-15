<?php
	$arr = ['张宁', '周亚君', '李雪芹'];
	print_r($arr);
	$arr2 = [
		['张宁', '周亚君', '李雪芹'],
		['魏光增', '李鑫', '钟亚洲']
	];
	print_r($arr2);
	$arr3 = [
		'php-1' => [
			['张宁', '周亚君', '李雪芹'],
			['魏光增', '李鑫', '钟亚洲']
		],
	];
	print_r($arr3);
	$arr4 = [
		'智游教育' => [
			'php-1' => [
				['张宁', '周亚君', '李雪芹'],
				['魏光增', '李鑫', '钟亚洲']
			]
		]
	];
	print_r($arr4);

	$arrf1 = [];
	foreach ($arr as $key => $value) {
		$arrf1[$key] = "好学的" . $value;
	}
	print_r($arrf1);
	print_r($arr);
	// foreach ($arr as $key => $value) {
	// 	$arr[$key] = "贪玩的" . $value;
	// }
	// print_r($arr);

	$arrf2 = $arr2;
	foreach ($arrf2 as $key => $value) {
		foreach ($value as $k2 => $v2) {
			$arrf2[$key][$k2] = "好学的" . $v2;
		}
	}
	print_r($arrf2);
?>