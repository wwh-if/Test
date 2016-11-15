<?php

interface Car {
    public function drive();
}


class Bwm implements Car {

    public function drive(){
echo "开宝马";
    }

}
class Benz implements Car {

    public function drive(){
echo "开奔驰";
    }

}



interface Driver {

    public function driveCar();
}

class BenzDriver {
    public function driveCar() {

    }
}

class BmwDirver {
    public function driveCar() {

    }
}


$CarObj = new BenzDriver();
$CObj = $CarObj->driveCar();

