<?php
	//路径
	$path = __DIR__;
	//大数组，里面包含所有文件列表/目录信息，以及其他信息。
	$list = dirlist($path);	
	function dirlist($path) {
		$res = glob("*");
		if (empty($res)) {
			return false;
		}
		//http://localhost/
		$base_url = $_SERVER['REQUEST_SCHEME'] . "://".  $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . "/";
		var_dump($base_url);
		$rlist = [];
		foreach ($res as $key => $value) {
			$rlist[$key]['filename'] = $value;
			$rlist[$key]['filetype'] = filetype($path . DIRECTORY_SEPARATOR. $value);
			$rlist[$key]['filesize'] = filesize($path . DIRECTORY_SEPARATOR. $value);
			$rlist[$key]['url'] = ($rlist[$key]['filetype'] == 'file') ? $base_url . $value : $base_url . $value . "/" ;
		}
		return $rlist;
		// var_dump($rlist);
	}
?>
<h1><?php echo __DIR__;?>目录的列表</h1>
<ul>
<?php if(!empty($list)): foreach ($list as $key => $value):?>
	<li><a href="<?php echo $value['url'] ?>"><?php echo $value['filename'] ?></a></li>
<?php endforeach;  endif;?>
</ul>