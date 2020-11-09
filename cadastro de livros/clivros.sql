create database clivros ;
CREATE TABLE `livrosc` (
  `id` int not null auto_increment ,
  `autor` varchar(220) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `editora` varchar(220) NOT NULL,
  `imgurl` varchar(1000) NOT NULL,
  primary key (id)
) DEFAULT CHARSET=utf8;

select * from livrosc ;




