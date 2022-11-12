CREATE DATABASE IF NOT EXISTS sis_web;

USE sis_web;

CREATE TABLE IF NOT EXISTS users (
	id int not null primary key auto_increment,
    email varchar(100) not null,
	senha varchar(100) not null,
	nome varchar(100) not null,
	endereco varchar(100) not null,
	numero int not null,
	tipo_cliente enum("pessoa_fisica", "pessoa_juridica") not null,
	cpf varchar(100) not null,
	cidade varchar(100) not null,
	uf varchar(15) not null,
	telefone varchar(100) not null,
	inscricao varchar(100) not null	
);

SELECT * FROM users;

SELECT * FROM users  WHERE email = 'horus.cristain@gmail.com' AND senha = 'd9b1d7db4cd6e70935368a1efb10e377';