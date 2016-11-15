<?php
	$arr = ["馒头", "包子", "窝头"];
	//张三,李四,王五
	// $zhangsan = $arr[0];
	// $lisi = $arr[1];
	// $wangwu = $arr[2];
	// print_r($zhangsan);
	list($zhangsan, $lisi, $wangwu) = $arr;
	print_r($lisi);



	$str = "馒头/包子/窝头";
	$arr2 = explode("/", $str);
	print_r($arr2);
	$str2 = implode(" - ", $arr2);
	print_r($str2);
	print "\r\n";
	$p = strpos("hello world", "ello");
	if ($p !== false) {
		print "存在";
	}