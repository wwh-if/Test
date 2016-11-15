<?php

$obj = new Redis();
$obj->connect("127.0.0.1",6739);
$row = $obj->get("abc");
var_dump($row);
