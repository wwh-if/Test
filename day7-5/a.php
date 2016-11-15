<?php
	//include 包含文件路径，1.相对路径。2.绝对路径
	// include "b.php";
	// include "./b.php";
	include __DIR__ . "/b.php";
	//两次include 会报错，当被包含文件有定义常量、function或者class的时候
	// include __DIR__ . "/b.php";
	//inclde_once不会报[function|class|常量]已定义过的错。
	include_once __DIR__ . "/b.php";
?>