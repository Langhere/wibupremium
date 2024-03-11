<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $conn; // Koneksi

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($query) {
        return $this->conn->query($query);
    }

    public function bind($param, $value, $type = null) {
       
    }

    public function execute() {
        
    }

    public function resultSet() {
        
    }

    public function single() {
        
    }

    public function rowCount() {
        return $this->conn->affected_rows;
    }
}
