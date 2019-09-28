drop database ejemplo1;
create database ejemplo1;
use ejemplo1;
create table ciudad(
Cod_ciudad int not null,
Nom_ciudad varchar (30),
primary key (Cod_ciudad)
);
create table usuario(
Id_usuario int not null,
PrimerNombre varchar (25) not null,
SegunNombre varchar	(25),
PrimerApellido varchar (25) not null,
SegunApellido varchar (25),
Correo varchar (50) not null,
Contraseña varchar (50) not null,
FK_Cod_ciudad int not null,
FK_Id_tpdoc varchar (10) not null,
FK_Id_genero int not null
 );
 
create table genero(
Id_genero int not null,
Iniciales varchar (5) not null,
Descp_genero varchar (30) not null,
primary key (Id_genero)
);

create table tipo_documento(
Id_tpdoc varchar (10) not null,
Acronimo varchar (5) not null,
Nom_tpdoc varchar (25),
primary key (Id_tpdoc)
);
alter table usuario add foreign key (FK_Cod_ciudad) references ciudad (Cod_ciudad);
alter table usuario add foreign key (FK_Id_genero) references genero (Id_genero);
alter table usuario add foreign key (FK_Id_tpdoc) references tipo_documento (Id_tpdoc);
alter table usuario add primary key (FK_Id_tpdoc, Id_usuario);
