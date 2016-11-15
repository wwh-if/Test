<?php
	class Container {

		private $_data;

		//读取不存在的成员属性时，调用__get方法。
		public function __get($key) {
			$var = isset($this->_data[$key]) ? $this->_data[$key] : '';
			return $var;
		}

		public function __set($key, $value) {
			$this->_data[$key] = $value;
		}
	}

	$Con = new Container();
	// print $Con->a;
	$Con->a = 100;
	print $Con->a;
?>