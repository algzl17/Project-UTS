<?php

include_once 'dbconfig.php';
class Dao{
    var $db;
    public function __construct() {
        $this->link = new Dbconfig();
    }
    
    public function read() {
        $query = "SELECT * FROM users ORDER BY id ASC";
        return mysqli_query($this->link->conn, $query);
    }
}

class Dao2{
    var $db;
    public function __construct() {
        $this->link = new Dbconfig();
    }
    
    public function read() {
        $query = "SELECT * FROM aktivasi";
        return mysqli_query($this->link->conn, $query);
    }
}
