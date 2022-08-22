<?php
$db = "model/casino.sqlite";
require_once "model/migration.php";
require_once "view/header.php";
?>

<form method="post">
    <input type="submit" name="bet" value="GO!">
    <input type="submit" name="restart  " value="Restart">
</form>

<?require_once "view/footer.php";?>