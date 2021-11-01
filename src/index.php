<h1>Hello Php</h1>

<form method="POST">
    <input type="number" name="x">
    <button type="submit">Send</button>
</form>

Sum:
<?php
$redis = new Redis();
$redis->connect('redis');
$counter = $redis->get('counter') + $_REQUEST["x"];
$redis->set('counter', $counter);
echo($counter);
?>