<?php
	printf("第%d周\r\n", date("W"));
	printf("时区：%s\r\n", date("T"));
	printf("UNIX:%d\r\n", date("U"));
	printf("TIME：%d\r\n", time());
	printf("小时：%s\r\n", date("O"));
	// var_dump(getdate());
	var_dump(checkdate(2, 29, 2008));
?>