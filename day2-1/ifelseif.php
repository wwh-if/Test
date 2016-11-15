<?php
	//var_dump($_SERVER);
	if ($_SERVER['argc'] >=2) {
		$score = $_SERVER['argv'][1];
	} else {
		print "分数错误，请重新输入";
		exit();
	}
	if ($score >=90 ) {
		print "学霸";
	} elseif ($score >= 80) {
		print "优秀";
	} elseif ($score >=70 ) {
		print "良好";
	} elseif ($score >= 60) {
		print "及格";
	} else {
		print "还需努力";
	}
?>