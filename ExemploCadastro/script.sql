/*CRIA O BANCO DE DADOS*/
CREATE DATABASE exemplo;
/*seleciona o banco a ser usado*/
USE exemplo;

/*criação de tabelas*/

CREATE TABLE tb_livro(
    cd INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    qt_paginas INT(10) NULL,
    editora VARCHAR(100) NULL,
    capa VARCHAR(120) NULL
);
