CREATE DATABASE imobiliaria;

USE imobiliaria;

CREATE TABLE imoveis (
    id_imoveis INT AUTO_INCREMENT PRIMARY KEY,
    nm_titulo VARCHAR(50);
    nm_tipo VARCHAR(50) NOT NULL,
    nm_endereco VARCHAR(255) NOT NULL,
    nr_endereco INT NOT NULL,
    vl_imoveis DECIMAL(10,2) NOT NULL,
    ds_imoveis TEXT NOT NULL
);
