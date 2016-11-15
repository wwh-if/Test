<?php

//首次使用namepsace不能省略

namespace worker {

    class work {

        public function setType($type = '') {
            print "workder";
        }

    }

}

namespace farmer {

    class work {

        public function setType($type = '') {
            print "farmer";
        }

    }

}

//1.直接写命名空间就可以。
//2.写任何一个命名空间。
namespace aaa {
    function hello() {
        print "hello world";
    }
    //如果不加斜线，则表示从当前命名空间向子空间延伸。
    $workObj = new \farmer\work();
    $workObj->setType();
}
    