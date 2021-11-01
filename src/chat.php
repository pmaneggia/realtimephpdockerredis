<?php

$redis = new Redis();
$redis->connect('redis');

foreach ($redis->lrange('chat', 0, -1) as $m) {
    echo('<li>' . $m. '</li>');
}