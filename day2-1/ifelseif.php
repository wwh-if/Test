<?php
	//var_dump($_SERVER);
	if ($_SERVER['argc'] >=2) {
		$score = $_SERVER['argv'][1];
	} else {
		print "������������������";
		exit();
	}
	if ($score >=90 ) {
		print "ѧ��";
	} elseif ($score >= 80) {
		print "����";
	} elseif ($score >=70 ) {
		print "����";
	} elseif ($score >= 60) {
		print "����";
	} else {
		print "����Ŭ��";
	}
?>