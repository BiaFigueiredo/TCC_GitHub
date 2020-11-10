use cadastro;
	create table if not exists `cadastro`.`chat`(
		`id` int not null AUTO_INCREMENT PRIMARY KEY,
		`nome` varchar(30) not null,
		`mensagem` text NOT null
        );





