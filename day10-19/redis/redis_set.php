<?php

$obj = new Redis();
$obj->connect("127.0.0.1",6739);
$obj->set("abc","hello php",60);
