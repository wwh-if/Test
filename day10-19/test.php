<?php
$memcache_obj = new Memcache;
$memcache_obj->connect('127.0.0.1', 11211);
$var = $memcache_obj->get('a');
var_dump($var);