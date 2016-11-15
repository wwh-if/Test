<?php

namespace mine;

class Dog {
    //类中定义常量
    const LEGS = 4;
    public function bark() {
        print "汪汪汪\r\n";
    }

}

function hello() {
    print "Hello World!\r\n";
}
//全局定义常量
const PI = 3.14;
//当前命名空间
print __NAMESPACE__ . "\r\n";

namespace test;
$a = "\mine\Dog";
$obj = new $a;
$obj->bark();

$b = "\mine\hello";
$b();

//类中的常量，动态获取
print \mine\Dog::LEGS . "\r\n";
$c1 = '\mine\Dog::LEGS';
print constant($c1) . "\r\n";

print \mine\PI . "\r\n";
$c2 = '\mine\PI';
print constant($c2);
print "\r\n";
//当前命名空间
print __NAMESPACE__;



