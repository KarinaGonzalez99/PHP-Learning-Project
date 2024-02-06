-- CREATE USER: Cria um novo usuário no banco de dados, além de definir a senha e as permissões.

CREATE USER 'usuario'@'localhost' IDENTIFIED BY 'senha';
GRANT ALL PRIVILEGES ON *.* TO 'usuario'@'localhost';
FLUSH PRIVILEGES;