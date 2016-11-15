<?php
	//数据库接口类
	interface Database {

		public function connect();

		public function query();

		public function close();
	}

	//接口之间可以继承
	interface aa extends Database {

		public function bb();
	}

	interface MySQLDriver {

		public function driver();

	}
	class IMySQL implements Database, MySQLDriver {
		public function connect() {

		}

		public function query() {

		}

		public function close() {

		}

		public function driver() {

		}

		public function bb() {

		}
	}

	$MySQLObj = new IMySQL();

?>