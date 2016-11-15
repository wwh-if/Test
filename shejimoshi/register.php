<?php
class A {

    public function init() {
        $str = "Hello World!!";
        Register::set("str",$str);
        }
}


class B {
    public function show() {
        $rtu = Register::get("str");
        var_dump($rtu);
    }
}

class C {
    public function show() {

    }
}


class Register {

    private static $_data;

    public static function  set($key,$val) {
        self::$_data[$key] = $val;
    }

    public static function  get($key) {
        if (empty(self::$_data[$key])) {
            return false;
        }
        return self::$_data[$key];
    }
}

$A = new A;
$A->init();
$B = new B;
$B->show();


