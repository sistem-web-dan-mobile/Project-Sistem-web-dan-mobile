# Backend MovieHub

Backend API untuk aplikasi MovieHub menggunakan PHP Native.

## Dibuat Oleh

- Nama: Ismi Chairunisa
- Role: Backend Developer

## Teknologi

- PHP Native
- MySQL
- JSON API

## Endpoint API

| Method | Endpoint                  | Fungsi           |
| ------ | ------------------------- | ---------------- |
| GET    | api.php?request=movies    | Ambil semua film |
| POST   | api.php?request=login     | Login user       |
| POST   | api.php?request=register  | Register user    |
| GET    | api.php?request=favorites | Ambil favorites  |

## Cara Menjalankan

1. Import database `moviehub.sql` ke phpMyAdmin
2. Jalankan XAMPP (Apache + MySQL)
3. Akses via `http://localhost/Backend-MovieHub/api.php`
