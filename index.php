<?php
$db = "model/casino.sqlite";
#include_once "model/migration.php";
include_once "controller/function.php";
include_once "view/header.php";
?>

<form method="post">
    <input type="submit" name="bet" value="GO!">
    <input type="submit" name="restart" value="Restart">
</form>
<?statistick($db);?>

<?include_once "view/footer.php";?>