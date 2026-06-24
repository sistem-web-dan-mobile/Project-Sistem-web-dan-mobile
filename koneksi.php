<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "moviehub";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die(json_encode([
        "status" => "error",
        "message" => "Koneksi gagal: " . mysqli_connect_error()
    ]));
}
