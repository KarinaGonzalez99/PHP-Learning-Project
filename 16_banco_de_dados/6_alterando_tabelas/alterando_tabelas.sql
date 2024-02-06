-- Alterando tabelas

ALTER TABLE : alterar a tabela
ADD COLUMN : adicionar uma coluna
DROP COLUMN : deletar uma coluna
MODIFY COLUMN : alterar uma coluna
RENAME COLUMN : renomear uma coluna
RENAME TO : renomear a tabela

ALTER TABLE carros
ADD motor INT;

ALTER TABLE carros
DROP ano_fabricacao;

ALTER TABLE carros
MODIFY COLUMN descricao VARCHAR(500);