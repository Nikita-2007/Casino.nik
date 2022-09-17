<?php
require_once("model/model.php");

class Roulette extends Model {

    private $sql;

    public function __construct() {
        parent::__construct();
        $this->sql = '';
    }

    //Вносим статистику
    public function setStat($sector) {
        $this->sql = "
            UPDATE 'roulette' SET stat=stat+1 WHERE sector = $sector
        ";
        $this->inDB($this->sql);
    }

    //Получаем статистику
    public function getStat() {
        $this->sql= "
            SELECT `sector`, `stat` FROM `roulette` ORDER BY `sector`
        ";
        $requset = $this->outDB($this->sql);
        $stat = [];
        foreach ($requset as $row)
            $stat[$row['sector']] = $row['stat'];
        return $stat;
    }

    //Обнулить статистику
    public function resetStat() {
        $this->sql = "
            UPDATE `roulette` SET stat=0
        ";
        $this->inDB($this->sql);
    }
}

?>