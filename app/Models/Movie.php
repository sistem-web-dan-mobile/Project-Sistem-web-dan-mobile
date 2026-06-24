<?php
class Movie {
    private $conn;
    private $table = "movies";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Ambil semua film
    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        return mysqli_query($this->conn, $query);
    }

    // Ambil film by ID
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = $id";
        return mysqli_query($this->conn, $query);
    }
}
?>