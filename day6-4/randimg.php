<?php
	$imgs = [
		'http://img4.imgtn.bdimg.com/it/u=565102513,1523338695&fm=206&gp=0.jpg',
		'http://blog.mydrivers.com/img/20090506/02480674.jpg',
		'http://www.pconline.com.cn/pcedu/pingce/0511/pic/051115ubuntu02_login.gif',
		'http://img2.imgtn.bdimg.com/it/u=2729601810,3560634048&fm=206&gp=0.jpg',
		'http://image.tianjimedia.com/uploadImages/2011/292/RE7OZZ629E08.jpg'
	];

	$randkey = array_rand($imgs);
	$img = $imgs[$randkey];
?>
<img src="<?php echo $img; ?>">