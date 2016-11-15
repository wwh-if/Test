<?php
	$mates = [
		'10001' => '张宁',
		'10002' => '周亚君',
		'10003' => [
			't' => '李雪芹',
			'f' => '红楼梦'
		],
		'10004' => '周亚君',
		'10005' => 10005,
		'10006' => '10005',
	];
	var_dump($mates);
	$res = array_key_exists('10001', $mates);
	var_dump($res);

	print_r(array_keys($mates));
	print_r(array_keys($mates, '周亚君'));
	print_r(array_keys($mates, '10005', true));