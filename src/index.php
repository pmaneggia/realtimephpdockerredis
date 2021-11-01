<h1>Hello Php</h1>

<form method="POST">
    <input type="number" name="x">
    <button type="submit">Send</button>
</form>

Sum:
<?php
$counter = file_get_contents("counter") + $_REQUEST["x"];
file_put_contents($counter);
echo($counter);
?>