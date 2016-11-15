<?php

//首次使用namepsace不能省略
namespace worker;

class work {
    
    public function setType($type = '') {
        print "workder";
    }
}


namespace farmer;

class work {
    
    public function setType($type = '') {
        print "farmer";
    }
}


$workObj = new \farmer\work();
$workObj->setType();
    