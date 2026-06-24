<?php
require_once '../Models/User.php';

class AuthController {
    private $user;

    public function __construct($db) {
        $this->user = new User($db);
    }

    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $result = $this->user->login($email, $password);
        
        if(mysqli_num_rows($result) > 0) {
            echo json_encode([
                "status" => "success",
                "message" => "Login berhasil"
            ]);
        } else {
            echo json_encode([
                "status" => "error", 
                "message" => "Email atau password salah"
            ]);
        }
    }
}
?>