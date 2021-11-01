<h1>Hello Php</h1>

<form method="POST">
    <input type="number" name="x">
    <button type="submit" value="send"></button>
</form>
<?= $_REQUEST["x"] + 1 ?>