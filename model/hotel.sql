DROP DATABASE IF EXISTS hotel;
CREATE DATABASE hotel;
USE hotel;

CREATE USER IF NOT EXISTS 'hotel_admin'@'%' IDENTIFIED BY '123';
GRANT ALL ON hotel.* TO 'hotel_admin'@'%';

CREATE TABLE tb_cliente
(
    codigo INT AUTO_INCREMENT,
    nome VARCHAR(32),
    sobrenome VARCHAR(32),
    cpf CHAR(14),
    endereco VARCHAR(128),
    telefone VARCHAR(24),
    
    PRIMARY KEY(codigo)
);