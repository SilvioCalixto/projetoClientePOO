create database projetoCliente;

use projetoCliente;

create table cliente(
	codigo int primary key auto_increment,
    nome varchar(200) not null,
    telefone varchar(17) not null,
    dtNascimento date not null,
    endereco varchar(200) not null
)engine = InnoDB;