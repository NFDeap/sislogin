
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

