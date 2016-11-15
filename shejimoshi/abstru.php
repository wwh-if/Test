<?php

interface BenzCar {
    public function drive();
    public function offroad();
}

interface BmwCar {
    public function drive();
    public function pickup();
}

class Benz implements BenzCar {
    public function drive() {
        echo "开奔驰";
    }
    public function offroad() {
        echo "越野";
    }

}
class Bmw implements BmwCar {
    public function drive(){
        echo "开宝马";
    }
    public function pickup() {
        echo "接送人";
    }
}

