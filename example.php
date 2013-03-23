<?php

include('MemcacheSASL.php');

$m = new MemcacheSASL;
$memcacheHostPort = explode(":", getenv('MEMCACHIER_SERVERS'));
$m->addServer($memcacheHostPort[0], $memcacheHostPort[1]);
$m->setSaslAuthData(getenv('MEMCACHIER_USERNAME'), getenv('MEMCACHIER_PASSWORD'));

var_dump($m->add('test', '123'));
echo $m->get('test');
$m->delete('test');
