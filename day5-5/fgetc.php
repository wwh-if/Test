<?php
	$handle = fopen("abc.txt", "r");
	// for ($i = 0; $i <10; $i++) {
	// 	$c = fgetc($handle);
	// 	print $c;
	// }

	while(false !== $c = fgetc($handle)) {
		print $c;
	}
	
?>