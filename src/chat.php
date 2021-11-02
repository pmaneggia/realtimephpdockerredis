<?php

$redis = new Redis();
$redis->connect('redis');

echo(json_encode($redis->lrange('chat', 0, -1)));