<?php
  class Database {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'regwebappn';
    private $username = 'root';
    private $password = 'root';
    private $conn;
    // DB Connect
    public function connect() {
      $this->conn = null;
        $this->conn = mysqli_connect('localhost', 'root', 'root', $this->db_name) or die("Cannot Connect To Database");

      return $this->conn;
    }
  }
 ?>
