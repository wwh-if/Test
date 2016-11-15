<?php

class People {
    
    //常量
    const ARMS = 2;
    const LEGS = 2;
    
    //属性
    public $name = "中国人";
    public static $type = "黄种人";
}
$people = new People();
var_dump($people);
print $people::ARMS . "\r\n";
print $people::$type . "\r\n";
print $people->name . "\r\n";
