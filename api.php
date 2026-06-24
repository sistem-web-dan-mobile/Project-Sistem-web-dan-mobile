<?php
require 'koneksi.php';
require 'app/Controllers/MovieController.php';
require 'app/Controllers/AuthController.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = $_GET['request'] ?? '';

switch($request) {
    // Ambil semua film
    case 'movies':
        $controller = new MovieController($conn);
        $controller->index();
        break;

    // Login user
    case 'login':
        $controller = new AuthController($conn);
        $controller->login();
        break;

    // Register user
    case 'register':
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $query = "INSERT INTO users (name, email, password) 
                  VALUES ('$name', '$email', '$password')";
        
        if(mysqli_query($conn, $query)) {
            echo json_encode([
                "status" => "success",
                "message" => "Register berhasil"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Register gagal"
            ]);
        }
        break;

    // Ambil favorites user
    case 'favorites':
        $user_id = $_GET['user_id'] ?? '';
        $query = "SELECT f.*, m.title, m.genre, m.poster 
                  FROM favorites f 
                  JOIN movies m ON f.movie_id = m.id 
                  WHERE f.user_id = '$user_id'";
        $result = mysqli_query($conn, $query);
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