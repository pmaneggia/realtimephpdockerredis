<h1>Hello Php</h1>

<form method="POST">
    <input name="msg">
    <button type="submit">Send</button>
</form>

<script>
    function reload() {
        location.reload();
    }
    window.addEventListener('load', () => {
        let id = setInterval(reload, 2000);

        document.querySelector('input').addEventListener('keyup', () => {
            clearInterval(id);
            id = setInterval(reload, 2000);
        });
        console.log('loaded');
    });
</script>

Chat:
<?php
$redis = new Redis();
$redis->connect('redis');

$msg = $_REQUEST['msg'];
if ($msg) {
    $redis->lpush('chat', $msg);
}

echo('<ul>');
foreach ($redis->lrange('chat', 0, -1) as $m) {
    echo('<li>' . $m. '</li>');
}
echo('</ul>');
?>