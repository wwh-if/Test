<style>
	b {
		font-size: 20px;
		color: red;
	}
</style>
<?php
	$str = "abcd1234abcd";
	$pattern = "/([a-z]+)([0-9]+)([a-z]+)/";
	$res = preg_replace($pattern, "<b>\\2\\1\\2</b>", $str);
	// var_dump($res);
	print $res;
	print "\r\n";

	$res2 = preg_replace("/(周瑜)(\S+)(黄盖)/", '\3\2\1', "周瑜打黄盖");
	print $res2;
	print "\r\n";

	$str3 = "沙发上对方的说法和大师傅江泽民爱上的回复的说法框架";
	$res3 = preg_replace("/(江泽\s*民)/", "江*民", $str3);
	print $res3;
	print "\r\n";

	$str4 = "按实际的发挥空间江泽民大会科技大厦周永康爱德华啥地方的徐才厚啊大fuck师傅";
	$pattern = "/(江\s*泽\s*民|周\s*永\s*康|徐\s*才\s*厚|fuck)/";
	function pcallback($matches) {
		$s = $matches[1];
		if (preg_match("/[a-zA-Z]/", $s) == false) {
			$res = substr_replace($s, "*", 3, 3);
		} else {
			$res = substr_replace($s, "*", 1, 1);
		}		
		return $res;
		// return 111;
	}
	$res4 = preg_replace_callback($pattern, "pcallback", $str4);
	print $res4;
	print "\r\n";

	//替换子串
	print substr_replace("hello world", "x", 1, 2);
	print "\r\n";
	$res = preg_match("/[a-zA-Z]/", "中文", $matches);
	var_dump($res);
	var_dump($matches);
?>