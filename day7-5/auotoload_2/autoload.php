<?php
	// include "Music.php";

	function __autoload($file) {
		include __DIR__ . "/" . $file . ".php";
	}

	$MusicObj = new Music();
	$MusicObj->play();

	$TVObj = new TV();
	$TVObj->play();

?>