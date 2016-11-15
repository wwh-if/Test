<?php

/**
 * 参考IBM官网：http://www.ibm.com/developerworks/cn/opensource/os-php-designptrns/
 * @author http://www.phpddt.com
 */
//观察者
interface IObserver {

    public function notify();
}

//定义可以被观察的对象接口
interface IObservable {

    public function addObserver($observer);
    public function delObserver($observer);
}

//实现IObservable接口
class MessageSystem Implements IObservable {

    private $_observers = array();

    public function addObserver($observer) {
        $this->_observers[] = $observer;
    }
    
    public function delObserver($observer) {
        foreach ($this->_observers as $key => $val) {
            if ($val == $observer) {
                unset($this->_observers[$key]);
                break;
            }
        }
    }

    public function doNotify() {
        foreach ($this->_observers as $o) {
            $o->notify();
        }
    }

}

//实现IObserver接口
class User Implements IObserver {

    public function __construct($username) {
        echo "我是新用户{$username}<br/>";
    }

    //通知观察者方法
    public function notify() {
        echo '欢迎新用户<br>';
    }

}

//使用
$u = new MessageSystem();

$xm = new User('小明');
$xh = new User("晓红");
$xhe = new User("小黑");
$u->addObserver($xm);
$u->addObserver($xh);
$u->addObserver($xhe);

$u->doNotify();

echo "<hr>";
$u->delObserver($xh);
$u->doNotify();