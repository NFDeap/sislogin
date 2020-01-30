
/*Criando o Database*/
CREATE DATABASE IF NOT EXISTS bdusuarios;

USE bdusuarios;


/*Criando a Tabela usuario */
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(50) NOT NULL,
  `situacao` boolean NOT NULL DEFAULT TRUE,
  `login` varchar(20) NOT NULL DEFAULT 'Usuário',
  `CPF` varchar(14) NOT NULL,
  `tipo` int NOT NULL DEFAULT '2',
  `email` varchar(50) NOT NULL,
  `sessao` timestamp NOT NULL,
  `senha` varchar(100) NOT NULL,  
   CONSTRAINT `pk_usuario` PRIMARY KEY (`id_usuario`)
);

insert into usuarios (nome_usuario, situacao, login, CPF, tipo, email, sessao, senha) 
values ('Admin',1,'Admin', '439.495.718-41', '1','teste@teste.com', NOW(),'$2y$10$asGC8DjuEFi4g0FqYa6Y1.7wAx4fNfA7VVTQvfTW6c4D1cnYImTLy'); /* senha 12345 */

insert into usuarios (nome_usuario, situacao, login, CPF, tipo, email, sessao, senha) 
values ('User',1,'User', '439.495.718-42', '2','teste2@teste2.com', NOW(),'$2y$10$asGC8DjuEFi4g0FqYa6Y1.7wAx4fNfA7VVTQvfTW6c4D1cnYImTLy');


/*Criando a Tabela posts */
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50),
  `descricao` varchar(100),
   CONSTRAINT `pk_post` PRIMARY KEY (`id`)
);

insert into posts (id, titulo, descricao)
values (1,'titulo Teste', 'descrição Teste'),
(2,'titulo Teste2', 'descrição Teste2'),
(3,'titulo Teste3', 'descrição Teste3');


/*Criando a Tabela Likes */
CREATE TABLE `rating_info` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating_action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `rating_info`
  ADD UNIQUE KEY `id_post` (`id_post`,`id_user`);
COMMIT;

