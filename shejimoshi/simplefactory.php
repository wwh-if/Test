 <?php

        /**
         * 抽象产品角色
         */
        interface Car {

            public function drive();
        }

        /**
         * 具体产品角色
         */
        class Benz implements Car {

            public function drive() {
                echo "开奔驰";
            }

        }

        class Bwm implements Car {

            public function drive() {
                echo "开宝马";
            }

        }

        /**
         * 工厂类角色
         */
        class Driver {

            public static function driverCar($type) {
                if ($type == "Benz") {
                    return new Benz();
                } elseif ($type=="Bwm") {
                    return new Bwm();
                }
            }

        }

        /**
         * 有钱人
         */
        class Magnate {
            public function goout() {
                $CarObj = Driver::driverCar("Benz");
                $CarObj->drive();
            }
        }
