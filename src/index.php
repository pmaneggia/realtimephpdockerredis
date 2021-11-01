<h1>Hello Php</h1>

<form method="POST">
    <input name="msg">
    <button type="submit">Send</button>
</form>

<script>
    function reload() {
        location.replace('');
    }

    function loadChat() {
        fetch('/chat.php').then(r => console.log(r.body));
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
<ul></ul>

<?php
$msg = $_REQUEST['msg'];
if ($msg) {
    $redis = new Redis();
    $redis->connect('redis');
    $redis->lpush('chat', $msg);
}
?>