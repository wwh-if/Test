<?php
	include "authcode.php";
	//这里不做COOKIE键存在的判断了
	$username = $_COOKIE['user'];
	$token = $_COOKIE['token'];
	$decode = authcode($token, "DECODE", $key);
	var_dump($decode);
	//对解密后的值进行判断了。
	var_dump($token);
	var_dump(authcode(urldecode("1b94G9p1HszjmzU7IuyErTQplWGswBy4Uoewcw45FEqLJ6uS4g"), "DECODE", $key));
?>