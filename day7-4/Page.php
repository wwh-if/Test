<?php
	class Page {

		protected $page;
		protected $count;

		//$page当前页，$count总页
		public function __construct($page, $count) {
			$page = max($page, 1);
			$this->page = $page;
			$this->count = $count;
		}

		public function display() {
			$pages = "";
			for ($i = 1; $i <= $this->count; $i++) {
				$pages .= sprintf('<a href="%s">%d</a>', $this->buildUrl($i), $i);
			}
			return $pages;
		}

		public function buildUrl($page) {
			//协议
			$scheme  = $_SERVER['REQUEST_SCHEME'];
			//主机名
			$host = $_SERVER['HTTP_HOST'];
			//路径
			$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/");
			$url = sprintf("%s://%s/%s?page=%d", $scheme, $host, $path, $page);
			return $url;
		}

	}

	//$page 当前page
	//一共多少页
	$page = !empty($_GET['page']) ? intval($_GET['page']) : 1;
	$count = 10;
	$PageObj = new Page($page, $count);
	$pages = $PageObj->display();
?>
<!DOCTYPE html>
<html lang="en">
<style>
	/*a {
		text-decoration: none;
		color: #cccccc;
		display: inline-block;
	}
	.pages span {
		margin: 5px 5px;
		padding: 5px 5px 5px 5px;
		border: 1px solid #eee;
	}*/
</style>
<head>
	<meta charset="UTF-8">
	<title>Page 分页类</title>
</head>
<body>
	<div class="content">当前页：<?php echo $page; ?></div>
	<div class="pages">
		<?php echo $pages; ?>
	</div>
</body>
</html>