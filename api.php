<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

require 'koneksi.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = $_GET['request'] ?? '';

switch($request) {
    case 'movies':
        $result = mysqli_query($conn, "SELECT * FROM movies");
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
        break;

    default:
        echo json_encode([
            "status" => "error", 
            "message" => "Endpoint tidak ditemukan"
        ]);
}
?>