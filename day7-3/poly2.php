<?php
	
	class Play {

		function run() {
			//获取人数，然后玩不同的游戏
			$args = func_get_args();
			$nums = func_num_args();
			// var_dump($args);
			// var_dump($nums);
			if ($nums == 2) {
				$this->chess($args[0], $args[1]);
			} elseif ($nums == 3) {
				$this->landlords($args[0], $args[1], $args[2]);
			} elseif ($nums == 4) {
				$this->mahjong($args[0], $args[1], $args[2], $args[3]);
			}
		}

		function chess($p1, $p2) {
			printf("%s和%s下象棋\r\n", $p1, $p2);
		}

		function landlords($p1, $p2, $p3) {
			printf("%s和%s和%s斗地主\r\n", $p1, $p2, $p3);
		}

		function mahjong($p1, $p2, $p3, $p4) {
			printf("%s和%s和%s和%s打麻将\r\n", $p1, $p2, $p3, $p4);
		}
	}

	$Game = new Play();
	$Game->run("张三", "李四");
	$Game->run("张三", "李四", "王五");
	$Game->run("张三", "李四", "王五", "赵六");

?>