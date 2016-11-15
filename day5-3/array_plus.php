<?php

// $a = "10hello" + 5;
// var_dump($a);
// var_dump("1hello" == 0);

$arr = [
	'a' => 'hello', 2, 3, 4
];

$arr2 = [
	'a' => 'world', 'b' => 'hello', 12, 13, 14, 15
];

$m = $arr + $arr2;
var_dump($m);


$baseConfig = [
	'app_path' => 'd:/wapstack/apahce2',
	'site_on' => true
];

$specialConfig = [
	'app_path' => 'd:/htdocs',
	'site_on' => false
];

$config1 = array_merge($baseConfig, $specialConfig);
$config2 = $specialConfig + $baseConfig;
var_dump($config1);
var_dump($config2);
var_dump($config1 === $config2);
?>