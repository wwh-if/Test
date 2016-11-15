<?php
	//写一个函数，参数为YYYY-mm-dd HH:ii::ss
	//如果和当前时间相差5分钟，就返回"刚刚",
	//如果是5分钟到1个小时之间，就返回"xx分钟数前",
	//如果是1个小时到24小时之间，就返回"xx小时xx分钟前"
	//如果是1天到1月之间，就会返回"xx天之前"
	//否则就返回"xx月之前"

	function publish_human_time($time) {
		$str = "";
		$timstap = strtotime($time);
		if (!$timstap) {
			$str = "日期时间格式错误";
			return $str;
		}
		$diff = time() - $timstap;
		if ($diff < 0) {
			$str = "时间超前，参数有误";
			return $str;
		}
		if ($diff <= 5 * 60) {
			$str = "刚刚";
		} elseif ($diff <= 60 * 60) {
			$minutes = ceil($diff / 60);
			$str = "{$minutes}分钟之前";
		} elseif ($diff <= 24 * 60 * 60) {
			//如果小于24小时，小时数，就是秒数/3600,分钟数就是秒数/3600的余数除以60。
			$hours = floor($diff / (60 * 60));
			$minutes = ceil(($diff % (60 * 60)) / 60);
			$str = "{$hours}小时{$minutes}分钟之前";
		} elseif ($diff <= 30 * 24 * 60 * 60) {
			$days = ceil($diff / (60 * 60 * 24));
			$str = "{$days}天之前";
		} else {
			$months = floor($diff / (60 * 60 * 24 * 30));
			$str = "{$months}月之前";
		}

		return $str;
	}
	$posttime = date("Y-m-d H:i:s", strtotime("-30 days -1 seconds"));
	var_dump($posttime);
	print publish_human_time($posttime);
?>