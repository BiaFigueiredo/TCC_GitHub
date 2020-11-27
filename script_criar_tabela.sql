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
/*INSERINDO LIVROS DE EXEMPLO PARA TESTE*/
INSERT INTO `livrosc` (`user`, `autor`, `titulo`, `editora`, `imgurl`) VALUES
	('User1', 'Rachael Lippincott', 'A Cinco Passos de Você', 'Alt', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7bigV6oYPI23buODLxiAV17FV21sqzbkRTuTM0VG2nNvUAkNmxR97-CER2AF77TdHajqQa4XI&usqp=CAc'),
	('User2', 'Kiera cass', 'A Seleção', 'Seguinte', 'https://lojasaraiva.vteximg.com.br/arquivos/ids/6993791-287-426/780220.jpg?v=637075499365830000'),	
    ('User3', 'Clare Vanderpool', 'Em Algum Lugar Nas Estrelas', 'Darkside', 'https://lojasaraiva.vteximg.com.br/arquivos/ids/4602202/1008900989.jpg?v=637054626553270000'),
	('User4', 'Becky Albertalli', 'Com Amor, Simon', 'Intrínseca', 'https://upload.wikimedia.org/wikipedia/pt/6/67/Love%2C_Simon.jpg'),
	('User1', 'John Green', 'Quem é você Alasca', 'Intrínseca', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtPknpLwMafQKni5UCYg5kakXWzkiT5LG3xIFptkW7Oz1epoIxznBgGy65eZhmY-B3JEjW4oQ&usqp=CAc'),
	('User7', 'Jennifer L. Armentrout', 'Se Não Houver Amanhã', 'Universo dos Livros', 'https://images-na.ssl-images-amazon.com/images/I/51v+bCLrhtL._SX339_BO1,204,203,200_.jpg'),
    ('User12', 'Victoria Aveyard', 'Rainha Vermelha', 'Seguinte', 'https://lojasaraiva.vteximg.com.br/arquivos/ids/12054910/1008976886.jpg?v=637141926959370000'),
    ('User15', 'Stephen King', 'Sob a Redoma', 'Suma', 'https://images-submarino.b2w.io/produtos/imagens/111949294/111949307_1SZ.jpg'),	
    ('User89', 'Mary Shelley', 'Frankenstein', 'Lackington', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREdVreVpmMP2WRh_FjLp-Yfu-QDfgcBs70FFq6K5l3CLjdLOBvxeVUk1d664YnI3BVZgdSGpxW&usqp=CAc'),
	('User34', 'Delia Owens', 'Um Lugar Bem Longe Daqui', 'Intrínseca', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN0wxc3VtwXup4k2vDlJgjACERkJxv98hPx8bzisBt-yPMzMK1eXejmxlMViu7lqZ584cgHqM&usqp=CAc'),
	('User56', 'Rainbow Rowell', 'Eleanor & Park', 'Novo Século', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQfZIyFr0VxqRDoezSylKnl2Cy8P5DdlRc8ghvUyIoF4Q6LTRLLEU8oo0TaA7FWUSfaYpR15lb&usqp=CAc'),
	('User47', 'Sarah J. Maas', 'Corte de Espinhos e Rosas', 'Galera', 'https://livrariascuritiba.vteximg.com.br/arquivos/ids/1908714-525-525/LV389070.jpg?v=637262208459900000');
/*CRIANDO A TABELA DO CHAT*/
	create if not exists table cadastro.chat(
		`id` int not null AUTO_INCREMENT PRIMARY KEY,
		`nome` varchar(30) not null,
		`mensagem` text NOT null
		) DEFAULT CHARSET=utf8mb4;

