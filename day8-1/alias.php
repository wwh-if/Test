<?php

namespace Org;

class Zend_File {

    public function read($file) {
        
    }

}

namespace ThirdParty;

class Zend_Dir {

    public function lists() {
        
    }

}

namespace test;

use Org\Zend_File as ZendFile;
use ThirdParty\Zend_Dir as ZendDir;

//$Obj = new \Org\Zend_File();
$Obj = new ZendFile();
var_dump($Obj);
//$Obj2 = new Zend_Dir();
$Obj2 = new ZendDir();
var_dump($Obj2);

//全局空间，加【\】
$DateObj = new \DateTime();
print $DateObj->format("Y-m-d H:i:s");
