<?php
	$url = "http://www.baidu.com/s?wd=" . rawurlencode("abc !# 中文-&copy\"");
	// header("location: " . $url);
	$content = file_get_contents($url);
	var_dump($content);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>URL跳转</title>
</head>
<body>
	<button id="u1">跳转1</button>
	<button id="u2">跳转2</button>
	<button id="u3">编码</button>
	<button id="u4">解析</button>
	<input id="i3" size="100" type="text">
	<script type="text/javascript">
		var url = "http://www.baidu.com/s?wd=";
		var query = "abc !# 中文-&copy\"";
		document.getElementById('u1').onclick = function() {
			var iurl = url + encodeURI(query);
			alert(iurl);
			window.location.href = iurl;
		}
		document.getElementById('u2').onclick = function() {
			var iurl = url + encodeURIComponent(query);
			alert(iurl);
			window.location.href = iurl;
		}
		document.getElementById('u3').onclick = function() {
			var iurl = url + encodeURIComponent(query);
			document.getElementById('i3').value = iurl;
		}
		document.getElementById('u4').onclick = function() {
			var iurl = url + decodeURIComponent(query);
			document.getElementById('i3').value = iurl;
		}
	</script>
</body>
</html>