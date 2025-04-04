CREATE DATABASE portal
    DEFAULT CHARACTER SET = 'utf8mb4';

USE portal;

CREATE TABLE IF NOT EXISTS produto (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    preco INT NOT NULL,
    descricao TEXT NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO produto (nome, preco, descricao) VALUES ('Produto 1', 100, 'Descrição do Produto 1');

SELECT * FROM produto;