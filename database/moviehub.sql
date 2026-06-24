-- Buat Database
CREATE DATABASE IF NOT EXISTS moviehub;
USE moviehub;

-- Tabel users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel movies
CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    genre VARCHAR(100),
    description TEXT,
    release_year INT,
    rating FLOAT,
    poster VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel favorites
CREATE TABLE favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    movie_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (movie_id) REFERENCES movies(id)
);

-- Data contoh movies
INSERT INTO movies (title, genre, description, release_year, rating) VALUES
('Avengers Endgame', 'Action', 'Film superhero Marvel', 2019, 8.4),
('The Dark Knight', 'Action', 'Film Batman terbaik', 2008, 9.0),
('Inception', 'Sci-Fi', 'Film tentang mimpi', 2010, 8.8);