<?php
	$base = array("orange", "banana", "apple", "raspberry");
	$replace1 = array(0 => 'pineapple', 5 => 'cherry');
	$replace2 = array(2 => 'grape');
	$base2 = array_replace($base, $replace1, $replace2);
	var_dump($base2);


	$arr2 = [
		'php1' => [
			'10001' => '张宁',
			'10002' => '周亚君'
		],
		'php2' => [
			'10001' => '张三',
			'10002' => '李四'
		]
	];
	// $arr2['php1']['10002'] = '李雪芹';
	$arr3 = array_replace_recursive($arr2, [
			'php1' => [
				'10002' => '李雪芹',
				'10003' => '张良'
			]
		]);
	var_dump($arr3);


	$base = array('citrus' => array("orange") , 'berries' => array("blackberry", "raspberry"), 'others' => 'banana' );
	$replacements = array('citrus' => 'pineapple', 'berries' => array('blueberry'), 'others' => array('litchis'));
	$replacements2 = array('citrus' => array('pineapple'), 'berries' => array('blueberry'), 'others' => 'litchis');

	$base3 = array_replace_recursive($base, $replacements);
	var_dump($base3);
	$base33 = array_replace_recursive($base3, $replacements2);
	var_dump($base33);

