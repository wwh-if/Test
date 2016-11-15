<?php
	//抽象电影类
	abstract class Movie {
		//抽象方法可以有public protected等访问控制标识
		abstract protected function play();
	}

	//中国电影类
	//抽象类可以被继承，继承的类也可以使抽象类
	// abstract class CHMovie extends Movie {
	class CHMovie extends Movie {

		protected function play() {
			echo "play()";
		}
	}

	$CM = new CHMovie();


	abstract class A {
		abstract public function aa();
	}

	abstract class B extends A {
		abstract public function bb();
	}

	abstract class C extends B {
		abstract public function cc();
		abstract public function cd();
	}


	class D extends A {
		//抽象方法必须实现一个。
		public function aa() {
			echo 'a';
		}
	}

	$D = new D();

?>