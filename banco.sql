#idcliente, nome, email, telefone, mensagem

create database siteclientes;

use siteclientes;

create table clientes(
    idcliente int primary key auto_increment,
    nome varchar(100),
    email varchar(50), 
    telefone varchar(12),
    mensagem varchar(500)
);
insert into clientes values(null,'maria','maria@google.com','telefone','mensagem');


select * from clientes;
