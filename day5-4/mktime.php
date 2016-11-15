<?php
	$d = mktime(12, 10, 23, 8, 11, 2016);
	var_dump($d);
	var_dump(date("Y-m-d H:i:s", $d));
	var_dump(strtotime("2016-08-11 12:10:23"));
	var_dump(strtotime("11 August 2016 12:10:23"));
	var_dump(strtotime("2016/08/11 12:10:23"));
	var_dump(date("Y-m-d", strtotime("2016/08/11 +22day")));
	var_dump(date("Y-m-d", strtotime("2016/08/11 +1month")));
	var_dump(date("Y-m-d H:i:s", strtotime("2016/08/11 12:10:23 + 1 hour")));
?>