<?php
	class Container {

		private $_data = [];

		protected $b = 200;

		public function __isset($var) {
			print "Hello World\r\n";
			$this->_data[$var] = rand(1000, 9999);
			return true;
		}

		public function __unset($var) {
			print "unset---\r\n";
		}

		public function __set($key, $value) {
			$this->_data[$key] = $value;
		}

		public function __get($key) {
			$var = isset($this->_data[$key]) ? $this->_data[$key] : "";
			return $var;
		}
	}

	$Con = new Container();
	print $Con->a . "\r\n";
	if (!empty($Con->a)) {
		print "存在\r\n";
		print $Con->a . "\r\n";
	} else {
		print "不存在";
	}

	unset($Con->b);
	var_dump($Con->b);
?>