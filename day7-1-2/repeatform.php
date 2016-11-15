<?php
	$gid = 10001;
	setcookie("goods_cookie_" . $gid, time(). rand(1000, 9999), time() + 600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>避免重复提交</title>
</head>
<body>
	<form action="repeatform_submit.php" method="post">
		<input type="text" name="goods">
		<input type="hidden" name="gid" value="<?php echo $gid;?>">
		<button type="submit">提交</button>
	</form>
</body>
</html>