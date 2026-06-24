<?php
require_once '../Models/Movie.php';

class MovieController {
    private $movie;

    public function __construct($db) {
        $this->movie = new Movie($db);
    }

    public function index() {
        $result = $this->movie->getAll();
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
}
?>