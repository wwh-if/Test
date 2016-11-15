<?php
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>表单提交</title>
</head>
<body>
	<form action="" method="post">
		<p>
			<label>用户名</label><input type="text" name="username">
		</p>
		<p>
			<label>密码</label><input type="password" name="password">
		</p>
		<p>
			<!-- <button type="submit">提交</button>
			<input type="submit" value2="提交2">
			 <button id="submit-3" type="button" onclick="javascript:document.getElementsByTagName('form')[0].submit();">提交3</button> -->
			<button id="submit-3" type="button">提交3</button>
		</p>
	</form>
	<script type="text/javascript">
		//在文档中找到ID是submit-3的对象	
		var submit3 = document.getElementById('submit-3');
		// submit3对象绑定onclick鼠标单击事件
		submit3.onclick = function() {
			//在文档中找到tagname标记为form的对象，如果有多个，仅取第一个
			var uform = document.getElementsByTagName("form")[0];
			uform.submit();
		}
		console.log(submit3);
	</script>
</body>
</html>