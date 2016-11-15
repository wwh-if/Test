<?php
	$fhandle = fopen("我是中文", "w+");
	fwrite($fhandle, "我的内容是中文");
	fclose($fhandle);

	$res = glob("*dir.php");
	var_dump($res);

	//强烈推荐不转码，直接换linux系统
	$ress = array_map("iiconv", $res);

	function iiconv($str) {
		return iconv("gb2312", "utf-8", $str);
	}
	var_dump($ress);



?>