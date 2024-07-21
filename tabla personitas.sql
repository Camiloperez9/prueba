create database personitas;
use personitas;

create table persona(
id int AUTO_INCREMENT primary key,
nombre varchar(256) not null,
apellido varchar(256) not null,
telefono int not null,
created_at datetime,
updated_at datetime,
deleted_at datetime
); 

insert INTO persona (id, nombre, apellido, telefono) values ('1' , 'Ricardo' , 'Milos', '097465321');
insert INTO persona (id, nombre, apellido, telefono) values ('2' , 'Alberto' , 'sofovich', '092347465');
insert INTO persona (id, nombre, apellido, telefono) values ('3' , 'corpse' , 'einstein', '0098654342');
insert INTO persona (id, nombre, apellido, telefono) values ('4' , 'chuchu' , 'pamela', '093425678');