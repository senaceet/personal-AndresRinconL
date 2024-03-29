drop database	netflix;
create database netflix;
Create table netflix.perfil(
ID_perfil int not null,
nombre_perfil varchar (15) not null,
avatar blob ,
FKUSU_numero_documento varchar (50) not null,
FKUSU_ID_documento int not null,
primary key (ID_perfil)
);

create table netflix.tipo_documento(
ID_documento int not null,
siglas varchar (5) not null,
nombre_tipo_documento varchar (40) not null,
primary key (ID_documento)
);

create table netflix.rol(
ID_rol int not null,
nombre_rol varchar (25) not null,
primary key (ID_rol)
);

create table netflix.plan(
ID_plan int not null,
valor float not null,
nombre_plan varchar (40) not null,
caracteristicas_plan varchar (255) not null,
primary key (ID_plan)
);

create table netflix.peliculas (
ID_pelicula int not null,
nombre_pelicula varchar (100) not null,
duracion time not null,
año year not null,
sinopsis text not null,
calificacion float (1.1),
estado tinyint (1) not null,
primary key (ID_pelicula)
);

create table netflix.series (
ID_serie integer not null,
nombre_serie varchar (50) not null,
numero_temporadas tinyint (2) not null,
año year not null,
sinopsis text not null,
calificacion float (1.1) not null,
estado tinyint(1) not null,
primary key (ID_serie)
);

 create table netflix.perfil_series(
 FK_ID_serie int not null,
 FK_ID_perfil int not null,
 primary key (FK_ID_serie,FK_ID_perfil)
  );
 alter table netflix.perfil_series add constraint FK_ID_serie foreign key (FK_ID_serie) references netflix.series (ID_serie) on update cascade;
 alter table netflix.perfil_series add constraint FK_ID_perfil foreign key (FK_ID_perfil) references netflix.perfil (ID_perfil) on update cascade; 

 create table netflix.perfil_peliculas(
 FK_ID_pelicula int not null,
 peFK_ID_perfil int not null,
 primary key (FK_ID_pelicula,peFK_ID_perfil)
  );
 alter table netflix.perfil_peliculas add constraint ID_perfil foreign key (peFK_ID_perfil) references netflix.perfil (ID_perfil) on update cascade;
 alter table netflix.perfil_peliculas add constraint FK_ID_pelicula foreign key (FK_ID_pelicula) references netflix.peliculas (ID_pelicula) on update cascade;

create table netflix.idioma (
ID_idioma int (2) not null,
nombre_idioma varchar (10) not null,
primary key (ID_idioma)
);

create table netflix.idioma_peliculas(
 FK_ID_pelicula int not null,
 FK_ID_idioma int not null,
 primary key (FK_ID_pelicula,FK_ID_idioma)
 );
alter table netflix.idioma_peliculas add constraint ID_pelicula foreign key (FK_ID_pelicula) references netflix.peliculas (ID_pelicula) on update cascade;
alter table netflix.idioma_peliculas add constraint FK_ID_idioma foreign key (FK_ID_idioma) references netflix.idioma (ID_idioma) on update cascade;
 
create table netflix.categoria (
ID_categoria int not null,
nombre_categoria varchar (30) not null,
primary key (ID_categoria)
);
create table netflix.categoria_peliculas (
FK_ID_pelicula int not null,
FK_ID_categoria int not null,
primary key (FK_ID_categoria,FK_ID_pelicula )
);
alter table netflix.categoria_peliculas add constraint fkID_pelicula foreign key (FK_ID_pelicula) references netflix.peliculas (ID_pelicula) on update cascade;
alter table netflix.categoria_peliculas add constraint fkID_categoria foreign key (FK_ID_categoria) references netflix.categoria (ID_categoria) on update cascade;

create table netflix.categoria_series (
FK_ID_series int not null,
FK_ID_categoria int not null,
primary key (FK_ID_categoria,FK_ID_series)
);
alter table netflix.categoria_series add constraint fkID_series foreign key (FK_ID_series) references netflix.series (ID_serie) on update cascade;
alter table netflix.categoria_series add constraint fkID1_categoria foreign key (FK_ID_categoria) references netflix.categoria (ID_categoria) on update cascade;

create table netflix.temporadas (
ID_temporadas int not null,
numero int (2) not null,
FK_ID_serie int not null,
primary key (ID_temporadas)
);
alter table netflix.temporadas add constraint FKID_serie foreign key (FK_ID_serie) references netflix.series (ID_serie) on update cascade;

create table netflix.capitulos (
ID_capitulo int not null,
nombre_capitulo varchar (20) not null,
numero int (2) not null,
sinopsis text not null,
duracion_capitulo time,
FK_ID_temporada int not null,
primary key (ID_capitulo)
);
alter table netflix.capitulos add constraint FK_ID_temporada foreign key (FK_ID_temporada) references netflix.temporadas (ID_temporadas) on update cascade;
 create table netflix.idioma_capitulos(
 FK_ID_capitulos int not null,
 FK_ID_idioma int not null,
 primary key (FK_ID_capitulos,FK_ID_idioma)
 );
 alter table netflix.idioma_capitulos add constraint ID_capitulos foreign key (FK_ID_capitulos) references netflix.capitulos (ID_capitulo) on update cascade;
 alter table netflix.idioma_capitulos add constraint ID_idioma foreign key (FK_ID_idioma) references netflix.idioma (ID_idioma) on update cascade;
 
create table netflix.tipo_pago(
ID_tipopago int not null,
nombre_tipopago varchar (30)not null,
primary key (ID_tipopago)
);

create table netflix.usuario (
Numero_documento Varchar (50) not null,
FK_ID_documento int not null,
primer_nombre varchar (25) not null,
segundo_nombre varchar (25),
primer_apellido varchar (25) not null,
segundo_apellido varchar (25),
email varchar (100) not null,
contraseña varchar (15) not null,
primary key (Numero_documento,FK_ID_documento),
FK_ID_rol int not null,
FK_ID_plan int not null
);
alter table netflix.usuario add constraint FK_ID_plan foreign key (FK_ID_plan) references netflix.plan (ID_plan) on update cascade;
alter table netflix.usuario add constraint FK_ID_rol foreign key (FK_ID_rol) references netflix.rol (ID_rol) on update cascade;
alter table netflix.usuario add constraint FK_ID_documento foreign key (FK_ID_documento) references netflix.tipo_documento (ID_documento) on update cascade;

alter table netflix.perfil add constraint numero_tpdoc foreign key (FKUSU_numero_documento,FKUSU_ID_documento) references netflix.usuario (Numero_documento,FK_ID_documento) on update cascade;

create table netflix.factura (
ID_factura int not null,
detalle text not null,
FK_ID_tipopago int not null,
FK_ID_plan int not null,
FK_ID_numerodocumento varchar (50) not null,
primary key (ID_factura,FK_ID_numerodocumento)
);
alter table netflix.factura add constraint FK_ID_numerodocumento foreign key (FK_ID_numerodocumento) references netflix.usuario (Numero_documento) on update cascade;
alter table netflix.factura add constraint FKID_plan foreign key (FK_ID_plan) references netflix.plan (ID_plan) on update cascade;
alter table netflix.factura add constraint FK_ID_tipopago foreign key (FK_ID_tipopago) references netflix.tipo_pago (ID_tipopago) on update cascade;


