--CRIANDO O BANCO DE DADOS
CREATE DATABASE cadastro; 
--USANDO O BANCO DE DADOS CRIADO
USE cadastro;
--CRIANDO A TABELA USUARIO NO BANCO DE DADOS
CREATE TABLE `cadastro`.`usuario` (
  `Usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `pessoa` VARCHAR(45) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  `editado` DATETIME,
  PRIMARY KEY (`Usuario_id`));
--Garantindo pelo SQL que não haja mais de uma conta com o mesmo email
ALTER TABLE usuario ADD UNIQUE (email);
