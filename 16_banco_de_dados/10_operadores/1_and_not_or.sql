-- And, or e not: semelhantes aos do PHP e auxiliam na filtragem de dados

SELECT * FROM itens WHERE nome = 'Borracha' AND descricao = 'Borracha formato cachorro'; -- ME TRAS TODOS OS DADOS ONDE O NOME É BORRACHA E A DESCRIÇÃO É BORRACHA FORMATO CACHORRO
SELECT * FROM itens WHERE nome = 'Borracha' OR descricao = 'Borracha formato cachorro'; -- ME TRAS TODOS OS DADOS ONDE O NOME É BORRACHA OU A DESCRIÇÃO É BORRACHA FORMATO CACHORRO
SELECT * FROM itens WHERE nome = 'Borracha' AND NOT descricao = 'Borracha formato gato'; -- ME TRAS TODOS OS DADOS ONDE O NOME É BORRACHA E A DESCRIÇÃO BORRACHA FORMATO CACHORRO