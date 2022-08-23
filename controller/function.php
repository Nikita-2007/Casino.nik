<?php
#генерируем рандомное число
$sector = 'Начните игру';
if (array_key_exists('bet', $_POST)) {
    $sector = rand(0, 36);
    $connect = new PDO("sqlite:$db");
    $sql = "UPDATE `roulette` SET stat = stat + 1 WHERE sector = $sector";
    $connect -> exec($sql);
    $connect = 0;
}
#Обнавление статисстики
if (array_key_exists('restart', $_POST)) {
    $connect = new PDO("sqlite:$db");
    $sql = "UPDATE `roulette` SET stat = 0";
    $connect -> exec($sql);
    $connect = 0;
}
#Вывод статистки
function statistick($db) {
    $connect = new PDO("sqlite:$db");
    $sql = "SELECT sector, stat FROM `roulette`";
    $res = $connect -> query($sql);
    $arr = [];
    foreach ($res as $row)
        $arr[$row['sector']] = $row['stat'];
    ksort($arr);
    echo "<div class='row'>";
    foreach ($arr as $key => $element) {
        echo "<div class='col'>";
        echo "<div>$key</div>";
        echo "<div>$element</div>";
        echo "</div>";
    }
    echo "</div>";
    $connect = 0;
}