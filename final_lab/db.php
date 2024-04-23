<?php

class db {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "admin";

    private $conn;

    public function __construct() {
        $this->openConn();
    }

    private function openConn() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAllAdmins() {
        $sqlstr = "SELECT * FROM admin";
        return $this->conn->query($sqlstr);
    }

    public function closeConn() {
        if ($this->conn != null) {
            $this->conn->close();
        }
    }
}

?>
