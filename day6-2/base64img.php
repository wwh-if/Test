<?php
	$img_content = file_get_contents("bianmu.jpg");
	$img_base64 = base64_encode($img_content);
?>
<!DOCTYPE html>
<html>
<head>
	<title>BASE64 IMAGE</title>
</head>
<body>
	<img src="data:image/jpg;base64,<?php echo $img_base64; ?>"/>
</body>
</html>