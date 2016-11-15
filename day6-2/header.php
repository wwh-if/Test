<?php
	header("HTTP/1.1 200 OK");
	header("X-Powered-By: DongZhu");
	// header('WWW-Authenticate: NTLM');
	// header('Content-type: image/jpeg');
	header('Content-type: application/octet-stream');
	$filename = date("YmdHis");
	// header("Content-Disposition: attachment; filename={$filename}.jpg");
	// header("filename={$filename}.jpg");
	echo file_get_contents("bianmu.jpg");
?>