-- Exclui o banco de dados caso exista.
DROP DATABASE IF EXISTS tcc;

-- Cria o banco de dados caso não exista.
CREATE DATABASE IF NOT EXISTS tcc;

DEFAULT character SET utf8
DEFAULT collate utf8_general_ci;

-- Usa o banco de dados.
USE tcc;

-- Exclui o banco de dados caso exista.
DROP TABLE IF EXISTS usuarios;

-- Tabela usuários.
CREATE TABLE IF NOT EXISTS usuarios  (
	usu_cod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	usu_nome VARCHAR(100) NOT NULL,
	usu_email VARCHAR(50) NOT NULL,
	usu_ativo BOOL DEFAULT '1',
	usu_cadastro DATETIME,
	usu_senha VARCHAR(100) NOT NULL,
	usu_data DATE NOT NULL,
	usu_celular VARCHAR(19) NOT NULL
)DEFAULT charset = utf8;

-- Exclui o banco de dados caso exista.
DROP TABLE IF EXISTS restricao;

-- Tabela restricao.
CREATE TABLE IF NOT EXISTS restricao (
	res_cod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	res_nivel INT(1) UNSIGNED DEFAULT '1',
	res_descricao VARCHAR(25) NOT NULL
)DEFAULT charset = utf8;

-- Exclui o banco de dados caso exista.
DROP TABLE IF EXISTS log;

-- Tabela de log.
CREATE TABLE IF NOT EXISTS log (
	log_cod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	log_ip VARCHAR(25) NOT NULL,
	log_descricao VARCHAR(25) NOT NULL,
	log_sistema VARCHAR(25) NOT NULL,
	log_alteracao TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)DEFAULT charset = utf8;

-- Exclui o banco de dados caso exista.
DROP TABLE IF EXISTS quiz;

-- Tabela do teste.
CREATE TABLE IF NOT EXISTS quiz (  
qui_cod INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
qui_data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
qui_ansiedade INT(11) NOT NULL,
qui_depressao INT(11) NOT NULL,
qui_email VARCHAR(50) NOT NULL
)DEFAULT charset = utf8;