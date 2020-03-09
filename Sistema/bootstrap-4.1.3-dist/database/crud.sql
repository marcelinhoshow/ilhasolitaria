-- Inserts --
INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_nivel, usu_ativo, usu_cadastro usu_senha, usu_data, usu_celular) 
VALUES (null, 'Marcelo Jordão', 'marcelo.jordao@etec.sp.gov.br', 'admin', '2001-03-03', '(14) 99629-2524');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_nivel, usu_ativo, usu_cadastro usu_senha, usu_data, usu_celular) 
VALUES (null, 'Lídio Souto', 'lidio.souto@etec.sp.gov.br', 'admin', '2001-05-23', '(14) 99628-3536');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_nivel, usu_ativo, usu_cadastro usu_senha, usu_data, usu_celular) 
VALUES (null, 'Caio Scioli', 'caio.scioli@etec.sp.gov.br', 'admin', '2000-07-11', '(14) 98203-2649');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_nivel, usu_ativo, usu_cadastro usu_senha, usu_data, usu_celular) 
VALUES (null, 'Victor Henrique', 'victor.oliveira305@etec.sp.gov.br', 'admin', '2001-02-15', '(14) 98102-5366');

SELECT * FROM usuarios;
-- Inserts--

-- Inserts com MD5--
INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) 
VALUES (null, 'Marcelo Jordão', 'marcelo.jordao@etec.sp.gov.br', MD5('admin'), '2001-03-03', '(14) 99629-2524');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) 
VALUES (null, 'Lídio Souto', 'lidio.souto@etec.sp.gov.br', MD5('admin'), '2001-05-23', '(14) 99628-3536');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) 
VALUES (null, 'Caio Scioli', 'caio.scioli@etec.sp.gov.br', MD5('admin'), '2000-07-11', '(14) 98203-2649');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) 
VALUES (null, 'Victor Henrique', 'victor.oliveira305@etec.sp.gov.br', MD5('admin'), '2001-02-15', '(14) 98102-5366');

SELECT * FROM usuarios;
-- Inserts com MD5--

-- Inserts com SHA1 --
INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) 
VALUES (null, 'Marcelo Jordão', 'marcelo.jordao@etec.sp.gov.br', SHA1('admin'), '2001-03-03', '(14) 99629-2524');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) 
VALUES (null, 'Lídio Souto', 'lidio.souto@etec.sp.gov.br', SHA1('admin'), '2001-05-23', '(14) 99628-3536');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) 
VALUES (null, 'Caio Scioli', 'caio.scioli@etec.sp.gov.br', SHA1('admin'), '2000-07-11', '(14) 98203-2649');

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) 
VALUES (null, 'Victor Henrique', 'victor.oliveira305@etec.sp.gov.br', SHA1('admin'), '2001-02-15', '(14) 98102-5366');

SELECT * FROM usuarios;
-- Inserts com SHA1 --

-- Inserts --
INSERT INTO `usuarios` 
VALUES (NULL, 'Usuário Teste', 'demo', SHA1( 'demo'), 'usuario@demo.com.br', 1, 1, NOW( ));

INSERT INTO `usuarios` 
VALUES (NULL, 'Administrador Teste', 'admin', SHA1('admin' ), 'admin@demo.com.br', 2, 1, NOW( ));

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular)  
VALUES (NULL, 'Usuário Teste', 'demo', SHA1( 'demo'), 'usuario@demo.com.br', 1, 1, NOW( ));

INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular)  
VALUES (NULL, 'Administrador Teste', 'admin', SHA1('admin' ), 'admin@demo.com.br', 2, 1, NOW( ));

SELECT * FROM usuarios;
-- Inserts --

-- Inserts quiz --
INSERT INTO quiz (qui_cod, qui_data, qui_ansiedade, qui_depressao)  
VALUES (NULL, '2018-10-30 03:14:07', MD5('11'), MD5('11'));

INSERT INTO quiz (qui_cod, qui_data, qui_ansiedade, qui_depressao)  
VALUES (NULL, '2018-10-30 03:14:07', MD5('11'), MD5('11'));

SELECT * FROM quiz;
-- Inserts quiz --

-- Inserts quiz --
INSERT INTO quiz (qui_cod, qui_data, qui_ansiedade, qui_depressao)  
VALUES (NULL, '2018-10-30 03:14:07', 11, 11);

INSERT INTO quiz (qui_cod, qui_data, qui_ansiedade, qui_depressao)  
VALUES (NULL, '2018-10-30 03:14:07', 11, 11);

SELECT * FROM quiz;
-- Inserts quiz --

-- Inserts quiz --
INSERT INTO quiz (qui_cod, qui_data, qui_ansiedade, qui_depressao, qui_email)  
VALUES (NULL, '2018-10-30 03:14:07', 5, 13), 'marcelo.jordao@etec.sp.gov.br';

INSERT INTO quiz (qui_cod, qui_data, qui_ansiedade, qui_depressao, qui_email)  
VALUES (NULL, '2018-10-29 14:50:00', 11, 11, 'marcelo.jordao@etec.sp.gov.br');

INSERT INTO quiz (qui_cod, qui_data, qui_ansiedade, qui_depressao, qui_email)  
VALUES (NULL, '2018-10-28 9:30:00', 9, 4), 'marcelo.jordao@etec.sp.gov.br';

INSERT INTO quiz (qui_cod, qui_data, qui_ansiedade, qui_depressao, qui_email)  
VALUES (NULL, '2018-10-27 12:20:00', 3, 2, 'marcelo.jordao@etec.sp.gov.br');

SELECT * FROM quiz;
-- Inserts quiz --

-- UPdate quiz --
UPDATE quiz
SET Nome_Livro = 'SSH, o Shell Seguro'
WHERE ID_LIVRO = 101;

UPDATE quiz
SET Nome_Livro = 'SSH, o Shell Seguro'
WHERE ID_LIVRO = 101;

UPDATE quiz
SET Nome_Livro = 'SSH, o Shell Seguro'
WHERE ID_LIVRO = 101;

UPDATE quiz
SET Nome_Livro = 'SSH, o Shell Seguro'
WHERE ID_LIVRO = 101;
-- UPdate quiz --

-- Delete quiz --
DELETE FROM NOME_DA_TABELA WHERE id = VALOR_DO_ID;

DELETE FROM NOME_DA_TABELA WHERE id = VALOR_DO_ID;

DELETE FROM NOME_DA_TABELA WHERE id = VALOR_DO_ID;

DELETE FROM NOME_DA_TABELA WHERE id = VALOR_DO_ID;
-- Delete quiz --