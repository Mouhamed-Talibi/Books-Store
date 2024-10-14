--creating database : 
CREATE DATABASE IF NOT EXISTS 'books_store';
USE 'books_store';

-- creating table books : 
CREATE TABLE IF NOT EXISTS 'books'(
    'id' INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    'name' VARCHAR(50) NOT NULL,
    'price' VARCHAR(20) NOT NULL,
    'image' VARCHAR(100) NOT NULL
);

-- creating cards table : 
CREATE TABLE IF NOT EXISTS 'cards'(
    'id' INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    'name' VARCHAR(50) NOT NULL,
    'price' VARCHAR(20) NOT NULL
); 