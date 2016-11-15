<?php
	$arr  = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach ($arr as $key => $value) {
		print $key . "=>" . $value . "\r\n";
	}
	
	print "\r\n";
	$articleList = [
		[
			'name' => '张三',
			'gender' => '男'
		],
		[
			'name' => '李四',
			'gender' => '女'
		],
		[
			'name' => '王五',
			'gender' => '男'
		]
	];
?>

<ul>
	<?php foreach ($articleList as $key => $value) {?>
	<li><?php echo $value['name'];?> - 
	<b style="color:<?php if($value['gender'] == '男'){ ?>blue<?php } else {?>orange<?php } ?>"><?php echo $value['gender'];?></b></li>
	<?php } ?>
	
</ul>
<hr>
<ul>
	<?php foreach($articleList as $key => $value): ?>
	<li><?php echo $value['name'];?> - 
	<b style="color:<?php if($value['gender'] == '男'): ?>blue<?php else: ?>orange<?php endif;?>"><?php echo $value['gender'];?></b></li>
	<?php endforeach; ?>
	
</ul>








