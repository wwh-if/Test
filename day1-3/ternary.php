<?php
	$score = 82;
	$level = ($score >= 60) ? ($score >= 90 ? "优秀": ($score >= 80 ? "良好": "及格")) : "不及格";
	print $level;
?>