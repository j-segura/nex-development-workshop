CREATE DATABASE nex_development_workshop;

USE nex_development_workshop;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(130) NOT NULL,
    password VARCHAR(30) NOT NULL
)