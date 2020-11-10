/*CRIANDO O BANCO DE DADOS*/
CREATE DATABASE IF NOT EXISTS cadastro; 
/*USANDO O BANCO DE DADOS CRIADO*/
USE cadastro;
/*CRIANDO A TABELA USUARIO NO BANCO DE DADOS*/
CREATE TABLE IF NOT EXISTS `cadastro`.`usuario` (
  `Usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `pessoa` VARCHAR(45) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  `editado` DATETIME,
  PRIMARY KEY (`Usuario_id`));
/*Garantindo pelo SQL que não haja mais de uma conta com o mesmo email*/
ALTER TABLE usuario ADD UNIQUE (email);
/*CRIANDO A TABELA DOS LIVROS*/
CREATE TABLE IF NOT EXISTS `livrosc` (
  `id` int not null auto_increment ,
  `autor` varchar(220) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `editora` varchar(220) NOT NULL,
  `imgurl` varchar(1000) NOT NULL,
  primary key (id)
) DEFAULT CHARSET=UTF8MB4;
	create table if not exists `cadastro`.`chat`(
		`id` int not null AUTO_INCREMENT PRIMARY KEY,
		`nome` varchar(30) not null,
		`mensagem` text NOT null
        );
