<?php
	// header("Content-Type:application/octet-stream");
	// readfile("abc.txt");
	header("Content-Type:image/jpeg");
	//论坛扣金币的过程
	$rand = rand(1, 2);
	$imgpath = "bianmu". $rand. ".jpg";
	readfile($imgpath);
?>