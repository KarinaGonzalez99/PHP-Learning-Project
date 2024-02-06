-- UNIQUE: garante que todos os valores em uma coluna ou um conjunto de colunas sejam diferentes/unicos

CREATE mailmarketing (
     email VARCHAR(100) NOT NULL UNIQUE,
     nome VARCHAR(100)
);

INSERT INTO mailmarketing (email, nome) VALUES ('gmail@gmail.com', 'Gmail'); -- gmail@gmail.com Gmail

INSERT INTO mailmarketing (email, nome) VALUES ('gmail@gmail.com', 'Gmail'); -- error duplicate key value violates unique constraint