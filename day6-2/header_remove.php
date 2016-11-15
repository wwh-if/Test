<?php
	header("X-Foo: Bar");
	header("X-Bar: Baz");
	header("token: " .md5(date("YmdHis") . "zhangsan" .rand(1000, 9999)));
	header_remove("X-Foo"); 
	// header("HTTP/1.1 201 OK");
	echo 11111;
	http_response_code(202);
	var_dump(http_response_code());
?>