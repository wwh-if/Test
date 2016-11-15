<?php
	$str = 'a:4:{s:3:"one";s:4:"1号";s:3:"tow";s:4:"2号";s:4:"thee";i:10001;i:100;i:200;}';
	$unserialize = unserialize($str);
	var_dump($unserialize);
?>