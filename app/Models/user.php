<?php
class User {
    private $conn;
    private $table = "users";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($email, $password) {
        $query = "SELECT * FROM " . $this->table . " 
                  WHERE email = '$email' 
                  AND password = '$password'";
        return mysqli_query($this->conn, $query);
    }
}
?>