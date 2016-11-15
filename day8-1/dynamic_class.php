<?php

namespace game {

    class Chess {

        public function play() {
            print "下象棋\r\n";
        }

    }

    class ArmyChess {

        public function play() {
            print "下军旗\r\n";
        }

    }
    
    function run($type) {
        $class = __NAMESPACE__ . '\\' . $type;
        print $class . "\r\n";
        $obj = new $class;
        return $obj;
    }

}

namespace playgame {
    $GameObj = \game\run("Chess");
    var_dump($GameObj);
    $GameObj->play();

}
