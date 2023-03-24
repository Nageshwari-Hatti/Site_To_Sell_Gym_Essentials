<?php

class DBConnection{
    public $conn;

    function __construct(){
        try{
            $this->conn = new MySQLi(db_host, db_username, db_password, db_name);
        }catch(Exception $e){
            throw new ErrorException("{$e->getMessage()}");
            die();
        }
    }

    function __destruct(){
        $this->conn->close();
    }
}