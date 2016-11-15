<?php
	$arr = [];
	$new = [1, 2, 3, 4, 5, 6, 7, 8];
	do {
		$shift = array_shift($new);
		array_push($arr, $shift);
		var_dump($arr);
		var_dump($new);
		sleep(2);

	} while($new);