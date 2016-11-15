<?php
	var_dump($_POST);
	//获取提交的gid
	$gid = $_POST['gid'];

	if (!$gid) {
		echo "请选择商品";
		exit();
	}
	//拼装goods_cookie键名
	$goods_cookie_key = "goods_cookie_" . $gid;
	//获取goods_cookie的值
	$goods_cookie = $_COOKIE[$goods_cookie_key];
	var_dump($goods_cookie);
	var_dump(time());
	//如果有COOKIE，说明是合法的POST请求，
	if ($goods_cookie) {
		//合法的处理过程
		//生成订单
		echo "你的订单已经生成";
		//删除COOKIE，或者COOKIE过期
		setcookie($goods_cookie_key, "", time() - 3600);
	} else {
		echo "请不要重复提交订单";
	}

?>