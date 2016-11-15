<?php
	var_dump($_POST);
	// var_dump($_GET);
	var_dump($_FILES);

	uploadfile("ifile");
	function uploadfile($filename) {
		//上传临时文件路径
		$filepath =  $_FILES[$filename]['tmp_name'];
		//文件基础名
		$basename = date("YmdHis") . rand(1000, 9999);
		//文件后缀
		$ext = pathinfo($_FILES[$filename]['name'], PATHINFO_EXTENSION);
		if (!$ext) {
			echo "未知上传文件类型，上传失败";
			die();
		}
		//上传后的目标文件路径
		$destpath = $basename . "." . $ext;
		if (is_uploaded_file($filepath)) {
			$res = move_uploaded_file($filepath, $destpath);
			if ($res) {
				echo "上传文件成功";
				return true;
			}
			@unlink($filepath);
		} else {
			echo "不是上传文件，上传失败";
		}
	}
?>