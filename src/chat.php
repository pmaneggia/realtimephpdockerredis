<?php

$redis = new Redis();
$redis->connect('redis');

echo(json_encode(array_map(function($x){return json_decode($x);},
    $redis->lrange('chat', 0, -1))));