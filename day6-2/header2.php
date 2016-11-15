<?php	
	header("Cache-Control: no-cache"); 
	echo 1111 . "\r\n";
	ob_end_flush();
	if (headers_sent()) {
		echo "头部已发送";
	} else {
		echo 222222 . "\r\n";
		// header('Location: http://www.example.com/');
	}
	

?>