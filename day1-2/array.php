<?php
$arr = [
	"欢迎", "来", "智游", "学习", "PHP!" 
];

$arr[5] = "哈哈哈";
$arr[2] = "智游100";
$arr['person'] = "张三";
$arr['zhangsan'] = [
	'name' => '张三',
	'age' => 25,
	'gender' => '男'
];
$arr['ww'] = [
	[
		'name' => '大李四',
		'age' => 25,
		'gender' => '男'
		],
	[
		'name' => '小李四',
		'age' => 24,
		'gender' => '男'
	]
];
$arr['lisi'][1] = [
	'name' => '大李四',
	'age' => 25,
	'gender' => '男'
];
$arr['lisi'][2] = [
	'name' => '小李四',
	'age' => 24,
	'gender' => '男'
];
var_dump($arr['lisi'][1]['name']);
?>