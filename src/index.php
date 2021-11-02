<?php
$user = $_COOKIE['user'];
if (!$user) {
    $user = uniqid();
    setcookie('user', $user);
}
?>
<h1>Hello Php</h1>

<form method="POST">
    <input name="msg">
    <button type="submit">Send</button>
</form>

<script>
    function loadChat() {
        fetch('/chat.php')
            .then(r => r.ok ? r.text() : Promise.reject())
            .then(s => document.querySelector('.chat').appendChild(generateChatItems(JSON.parse(s))));
    }

    function generateChatItems(msgList) {
        let list = document.createElement('ul');
        msgList.forEach(i => {
            let listElement = document.createElement('li');
            listElement.appendChild(document.createTextNode(i.msg));
            list.appendChild(listElement);
        });
        return listt;
    }

    window.addEventListener('load', () => {
        loadChat();
        setInterval(loadChat, 500);
        console.log('loaded');
    });
</script>

Chat:
<div class="chat"></div>

<?php
$msg = $_REQUEST['msg'];
if ($msg) {
    $redis = new Redis();
    $redis->connect('redis');
    $redis->lpush('chat', json_encode(['user' => $user, 'msg' => $msg]));
}
?>