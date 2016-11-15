<?php

/**
 * 类型约束
 */
class Zhihao {

    public function banZhuan() {
        print "搬砖\r\n";
    }

}

class Pengju {

    public function banZhuan() {
        print "搬砖";
    }

}

class Work {
    
    /**
     * 
     * @param Zhihao $obj
     * @return boolean
     */
    public function implement(Zhihao $obj) {
        $obj->banZhuan();
        return true;
    }

}

class BanzhuanWork extends Work {

    public function implement($type) {
        var_dump($type);
    }

}

//    $ZH = new Pengju();
//    $WorkObj = new Work();
//    $WorkObj->implement($ZH);

$ZH = new Zhihao();
$BzWork = new BanzhuanWork();
$BzWork->implement("王五");

