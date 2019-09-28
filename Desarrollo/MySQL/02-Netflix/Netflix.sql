drop database	Netflix;
create database Netflix;
Create table netflix.perfil(
ID_perfil int not null,
nombre_perfil varchar (10) not null,
avatar blob not null,
primary key (ID_perfil)
);

create table netflix.tipo_documento(
ID_documento varchar (15) not null,
siglas varchar (5) not null,
nombre_tipo_documento varchar (30) not null,
primary key (ID_documento)
);

create table netflix.rol(
ID_rol int not null,
nombre_rol varchar (25) not null,
primary key (ID_rol)
);

create table netflix.plan(
ID_plan int not null,
nombre_plan varchar (15) not null,
caracteristicas_plan varchar (30) not null,
primary key (ID_plan)
);

create table netflix.peliculas (
ID_pelicula int not null,
nombre_pelicula varchar (25) not null,
duracion time not null,
año year not null,
sinopsis varchar(100) not null,
calificacion float ,
primary key (ID_pelicula)
);

create table netflix.series (
ID_serie integer not null,
nombre_serie varchar (25) not null,
numero_temporadas tinyint (2) not null,
duracion time not null,
año year not null,
sinopsis varchar(100) not null,
calificacion float ,
primary key (ID_serie)
);

 create table netflix.perfil_series(
 FK_ID_serie int not null,
 FK_ID_perfil int not null,
 foreign key (FK_ID_serie) references netflix.series (ID_serie),
 foreign key (FK_ID_perfil) references netflix.perfil (ID_perfil),
 primary key (FK_ID_serie,FK_ID_perfil)
 );

 create table netflix.perfil_peliculas(
 FK_ID_pelicula int not null,
 FK_ID_perfil int not null,
 foreign key (FK_ID_pelicula) references netflix.peliculas (ID_pelicula),
 foreign key (FK_ID_perfil) references netflix.perfil (ID_perfil),
 primary key (FK_ID_pelicula,FK_ID_perfil)
 );

create table netflix.idioma (
ID_idioma int (2) not null,
nombre_idioma varchar (10) not null,
primary key (ID_idioma)
);

create table netflix.idioma_peliculas(
 FK_ID_pelicula int not null,
 FK_ID_idioma int not null,
 foreign key (FK_ID_pelicula) references netflix.peliculas (ID_pelicula),
 foreign key (FK_ID_idioma) references netflix.idioma (ID_idioma),
 primary key (FK_ID_pelicula,FK_ID_idioma)
 );
 
 create table netflix.idioma_series(
 FK_ID_serie int not null,
 FK_ID_idioma int not null,
 foreign key (FK_ID_serie) references netflix.series (ID_serie),
 foreign key (FK_ID_idioma) references netflix.idioma (ID_idioma),
 primary key (FK_ID_serie,FK_ID_idioma)
 );

create table netflix.categoria (
ID_categoria int not null,
nombre_categoria varchar (10) not null,
FK_ID_pelicula int not null,
primary key (ID_categoria),
foreign key (FK_ID_pelicula) references netflix.peliculas (ID_pelicula)
);

create table netflix.temporadas (
ID_temporadas int not null,
nombre_temporada varchar (20) not null,
numero int (2) not null,
sinopsis varchar (30) not null,
FK_ID_serie int not null,
primary key (ID_temporadas),
foreign key (FK_ID_serie) references netflix.series (ID_serie)
);

create table netflix.capitulos (
ID_capitulo int not null,
nombre_capitulo varchar (20) not null,
numero int (2) not null,
sinopsis varchar (30) not null,
duracion_capitulo time,
FK_ID_temporada int not null,
primary key (ID_capitulo),
foreign key (FK_ID_temporada) references netflix.temporadas (ID_temporadas)
);

create table netflix.tipo_pago(
ID_tipopago int not null,
nombre_tipopago varchar (15),
primary key (ID_tipopago)
);

create table netflix.usuario (
Numero_documento Varchar (20) not null,
primer_nombre varchar (25) not null,
segundo_nombre varchar (25),
primer_apellido varchar (25) not null,
segundo_apellido varchar (25),
email varchar (30) not null,
contraseña varchar (15) not null,
primary key (Numero_documento,FK_ID_documento),
FK_ID_documento varchar (15) not null,
FK_ID_rol int not null,
FK_ID_factura int not null,
FK_ID_perfil int not null,
FK_ID_plan int not null,
foreign key (FK_ID_plan) references netflix.plan (ID_plan),
foreign key (FK_ID_rol) references netflix.rol (ID_rol),
foreign key (FK_ID_perfil) references netflix.perfil (ID_perfil),
foreign key (FK_ID_documento) references netflix.tipo_documento (ID_documento)
);

create table netflix.factura (
ID_factura int not null,
detalle varchar (30) not null,
FK_ID_tipopago int not null,
FK_ID_plan int not null,
FK_ID_numerodocumento varchar (20) not null,
primary key (ID_factura,FK_ID_numerodocumento),
foreign key (FK_ID_numerodocumento) references netflix.usuario (Numero_documento),
foreign key (FK_ID_plan) references netflix.plan (ID_plan),
foreign key (FK_ID_tipopago) references netflix.tipo_pago (ID_tipopago)

);

