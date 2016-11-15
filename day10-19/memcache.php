<?php
$memcache_obj = new Memcache;
$memcache_obj->connect('127.0.0.1', 11211);
$memcache_obj->set('a',"hello world!",MEMCACHE_COMPRESSED,60);



?>
