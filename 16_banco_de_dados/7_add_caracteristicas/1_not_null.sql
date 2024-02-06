-- NOT NULL

CREATE TABLE notnull(
	nome VARCHAR(100) NOT NULL,
    idade int
);

-- NOT NULL
INSERT INTO notnull (nome, idade) VALUES ('Karina', 25); -- KARINA, 25

INSERT INTO notnull (idade) VALUES (18); --ERROR NO MODO RIGIDO

INSERT INTO notnull (nome) VALUES ('Sunna'); -- Sunna, NULL

