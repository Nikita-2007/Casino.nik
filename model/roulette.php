<?php
require_once("model/model.php");

class Roulette extends model {

    private $sql;

    public function __construct() {
        parent::__construct();
        $this->sql = '';
    }

    //Вносим статистику
    
    //Получать статистику

    //Обнулить статистиук
    public function reset() {
        $this->sql = "
            UPDATE `roulette` SET stat = 0
        ";
        $this->inDB($this->sql);
    }
}

?>