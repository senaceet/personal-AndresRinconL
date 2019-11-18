drop database prueba;
create database prueba;
use prueba;
create table prueba.usuario (
primer_nombre varchar (25) not null,
segundo_nombre varchar (25),
primer_apellido varchar (25) not null,
segundo_apellido varchar (25),
edad int not null
);