CREATE DATABASE chat;
USE chat;

CREATE TABLE msg(
    id INT PRIMARY KEY AUTO_INCREMENT,
    origem VARCHAR(40),
    mensagem VARCHAR(200)
);
