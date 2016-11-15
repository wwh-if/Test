<?php

//dynamic

/**
 * 动态函数
*/
function hello() {
    print "hello world\r\n";
    print __FUNCTION__ . "\r\n";
    print __METHOD__ . "\r\n";
}

$foo = "hello";
$foo();
 
/**
 * 动态类，动态方法
 */
class Dog {
    
    public function bark() {
        print "汪汪汪\r\n";
        print __METHOD__ . "\r\n";
        print __FUNCTION__ . "\r\n";
        print __CLASS__ . "\r\n";
    } 
}

$class = "Dog";
$obj = new $class;
var_dump($obj);
$func = "bark";
$obj->$func();


const BANNER = "###欢迎来到中土世界###\r\n";
print BANNER;
$b = "BANNER";
print constant($b);





















