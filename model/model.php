<?php

abstract class Model {

    private $path;
    private $connect;

    protected function __construct() {
        $this->path = "model/data/casino.sqlite";
    }

    //Сохранить в базу данных
    protected function inDB($sql) {
        try {
            $this->connect = new PDO("sqlite:$this->path");
            $this->connect->exec($sql);  
            $this->connect = null;
        } catch (PDOException $e){
            echo "Ошибка базы данных: " . $e -> getMessage();
        }
    }

    //Загрузить их базы данных
    protected function outDB($sql) {
        try {
            $this->connect = new PDO("sqlite:$this->path");
            $request = $this->connect->query($sql); 
            $this->connect = null;
            return $request;
        } catch (PDOException $e){
            echo "Ошибка базы данных: " . $e -> getMessage();
            return null;
        }
    }
}
