-- PRIMARY KEY: chave primária, valores unicos e não nulos, só pode ter uma por tabela

CREATE TABLE itens (
     id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT, -- INT UNSIGNED: só aceita valores positivos, AUTO_INCREMENT: incrementa automaticamente
     nome VARCHAR(255),
     descricao TEXT
);