<?php
	//变量的存在于cache.txt里，如果没有，就写入：【YYYY-mm-dd HH:ii:ss】。
	//如果cache.txt的修改时间和现在时间相差10秒钟，就读取cache.txt的内容。否则，继续写入当前时间，并且显示写入的内容。
	//结果：第一次访问的时候，应该写入cache.txt：当前时间：2016-08-12 17:10:23
	//23秒-33之间时候，刷新页面，都应该显示23秒。
	//等33秒之后，刷新页面，应该显示那一刻的时间，比如是17:10:45。接下的10秒内再次访问，还实现17:10:45 

	
	//1.有文件就读取，没文件就生成文件，同时生成数据，保存到文件

	$cacheFile = "cache.txt";
	if (file_exists($cacheFile)) {
		$filemtime = filemtime($cacheFile);	
		if (time() - $filemtime > 10) {
			$content = date("Y-m-d H:i:s");
			file_put_contents($cacheFile, $content);
		} else {
			$content = file_get_contents($cacheFile);			
		}
	} else {
		$content = date("Y-m-d H:i:s");
		file_put_contents($cacheFile, $content);
	}
	print $content;
	











	


     
?>