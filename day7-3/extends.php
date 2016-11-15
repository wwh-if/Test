<?php
	class Person {

		function __construct() {
			print "我是人类。\r\n";
		}

		function eat($meat = "鸡肉") {
			print "我能吃" . $meat . "。\r\n"; 
		}

		function __destruct() {
			print "人类结束。\r\n";
		}
	}

	class Man extends Person {
		function __construct() {
			//调用父类的方法
			parent::__construct();
			//类中的方法可以直接::静态调用，但是不能直接调用非静态属性吧。
			//不推荐self::非静态方法
			self::eat();
			print "我是男人类。\r\n";
		}

		function eat($meat = "") {
			print "我不吃猪肉。\r\n";
		}

		function drink($wine = "菠萝啤") {
			print "我能喝" . $wine . "。\r\n";
		}

		function __destruct() {
			print "男人类结束\r\n";
		}
	}

	$Zhangsan = new Man();
	$Zhangsan->drink("啤酒");
	// $Zhangsan->eat("猪肉");
?>