<?php

/* * 顶层接口
 * Interface IGiveGift
 */

interface IGiveGift {

    public function giveRose();

    public function giveChocolate();
}

/* * 追求者
 * Class Follower
 */

class Follower implements IGiveGift {

    private $girlName;

    public function __construct($name = 'Girl') {
        $this->girlName = $name;
    }

    public function giveRose() {
        echo "{$this->girlName}:这是我送你的玫瑰，望你能喜欢。<br/>";
    }

    public function giveChocolate() {
        echo "{$this->girlName}:这是我送你的巧克力，望你能收下。<br/>";
    }

}

/* * 代理
 * Class Proxy
 */

class Proxy implements IGiveGift {

    private $follower;

    public function __construct($name = 'Girl') {
        $this->follower = new Follower($name);
    }

    public function giveRose() {
        $this->follower->giveRose();
    }

    public function giveChocolate() {
        $this->follower->giveChocolate();
    }

}

//客户端代码
$proxy = new Proxy('范冰冰');
$proxy->giveRose();
$proxy->giveChocolate();
