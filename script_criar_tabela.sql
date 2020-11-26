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
  PRIMARY KEY (`Usuario_id`)) DEFAULT CHARSET=utf8mb4;
/*Garantindo pelo SQL que não haja mais de uma conta com o mesmo email*/
ALTER TABLE usuario ADD UNIQUE (email);
/*CRIANDO A TABELA DOS LIVROS*/
CREATE TABLE IF NOT EXISTS `livrosc` (
  `id` int not null auto_increment ,
  `user` varchar(220) NOT NULL,
  `autor` varchar(220) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `editora` varchar(220) NOT NULL,
  `imgurl` varchar(1000) NOT NULL,
  primary key (id)
) DEFAULT CHARSET=utf8mb4 ENGINE=InnoDB AUTO_INCREMENT=13;
INSERT INTO `livrosc` (`id`, `autor`, `titulo`, `editora`, `imgurl`) VALUES
	(1, ' Rachael Lippincott', 'A Cinco Passos de Você', 'Alt', 'img/1.jpg'),
	(2, 'Kiera cass', 'A Seleção', 'Seguinte', 'img/a.jpg'),
	(3, 'Clare Vanderpool', 'Em Algum Lugar Nas Estrelas', 'Darkside', 'img/estrelas.jpg'),
	(4, 'Becky Albertalli', 'Com Amor, Simon', 'Intrínseca', 'img/simon.jpg'),
	(5, 'John Green', 'Quem é você Alasca', 'Intrínseca', 'img/quem.jpg'),
	(6, 'Jennifer L. Armentrout', 'Se Não Houver Amanhã', 'Universo dos Livros', 'img/if.jpg'),
	(7, 'Victoria Aveyard', 'Rainha Vermelha', 'Seguinte', 'img/rainha.jpg'),
	(8, 'Stephen King', 'Sob a Redoma', 'Suma', 'img/8.jpg'),
	(9, 'Mary Shelley', 'Frankenstein', 'Lackington', 'img/9.jpg'),
	(10, 'Delia Owens', 'Um Lugar Bem Longe Daqui', 'Intrínseca', 'img/longe.jpg'),
	(11, 'Rainbow Rowell', 'Eleonor & Park', 'Novo Século', 'img/eleonor.jpg'),
	(12, 'Sarah J. Maas', 'Corte de Espinhos e Rosas', 'Galera', 'img/corte_de_espinhos.jpg');
ALTER TABLE `cadastro`.`livrosc` 
ADD COLUMN `usuario` VARCHAR(200) NOT NULL ;
ALTER TABLE livrosc ADD FOREIGN KEY (usuario) REFERENCES usuario(usuario);
/*CRIANDO A TABELA DO CHAT*/
	create if not exists table cadastro.chat(
		`id` int not null AUTO_INCREMENT PRIMARY KEY,
		`nome` varchar(30) not null,
		`mensagem` text NOT null
		) DEFAULT CHARSET=utf8mb4;

