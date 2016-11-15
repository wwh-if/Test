<?php

/**
 * 实例化检测
 */

class Dog {
    
    public function eat($DogFood) {
        if ($DogFood instanceof DogFood) {
            print "可以吃";
        } else {
            print "不可以吃";
        }
    }
}

class DogFood {
    
    public function banner() {
        print "这是狗粮";
    }
    
}

class FishFood {
    
    public function banner() {
        print "这是鱼饲料";
    }
    
}

$Husky = new Dog();
$food = new FishFood();
//$food = new DogFood();
//$Husky->eat("骨头粉");
$Husky->eat($food);


