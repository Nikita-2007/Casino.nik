<?php
require_once("model/model.php");

class User extends Model {

    private $sql;

    public function __construct() {
        parent::__construct();
        $this->sql = '';
    }

    //Добовляем игрока
    public function addUser($name = 'unknown', $pass = '...') {
        $this->sql = "
            
        ";
        $this->inDB($this->sql);
    }

    //Обновляем счет игрока

    //Редактируем игрока

    //Убираем игрока
}

?>