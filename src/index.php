<h1>Hello Php</h1>

<form method="POST">
    <input type="number" name="x">
    <button type="submit">Send</button>
</form>

Sum:
<?php echo($_REQUEST["x"] + 1) ?>