<?php
	// $res = rmdir("a/b/c/d/e");
	// var_dump($res);


	//递归删除目录
	function recursive_rmdir($path) {
		static $i = 1;
		var_dump($i);
		var_dump($path);
		if (is_dir($path)) {
			if ($path != "." & $path !== "..") {				
				rmdir($path);
				$i++;
				sleep(1);
				$ppath = dirname($path);
				recursive_rmdir($ppath);
			}
			
		}		
	}

	recursive_rmdir("a/b/c/d/e");

?>