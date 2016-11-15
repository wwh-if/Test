<?php
	function readlinefile($file) {
		$str = "";
		$handle = fopen($file, "r");
		// while (feof($handle) == false) {
			// $str .= fgets($handle);
		while (false != $line = fgets($handle)) {
			$str .= $line;
		}
		return $str;
	}

	var_dump(readlinefile("abc.txt"));
	
?>