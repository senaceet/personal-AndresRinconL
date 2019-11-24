use netflix;
#Listar nombres, apellidos de clientes que su primer nombre inicie por la letra "D" o "A" o "B"
select * from netflix.usuario where primer_nombre like "d%" or primer_nombre like "a%" or primer_nombre like "b%";
#Películas publicadas entre los años 2000 y 2019
select año, nombre_pelicula from netflix.peliculas where (año>2000 and año<2019);
#Nombre de series que inician por una letra diferente a "C"
select nombre_serie from netflix.series where (nombre_serie <>"c%");
#Nombres de películas que inician por "L" o "T"v
select nombre_pelicula from netflix.peliculas where nombre_pelicula like "l%" or nombre_pelicula like "t%";
#El tipo de plan que tiene el precio más económico
select valor, nombre_plan, caracteristicas_plan from netflix.plan where valor = (select min(valor) from netflix.plan );
#El tipo de plan que tiene el precio más alto
select valor, nombre_plan, caracteristicas_plan from netflix.plan where valor = (select max(valor) from netflix.plan );
#Cantidad de usuarios registrados
select count(1) from netflix.usuario;
#Cantidad de usuarios que adquirieron plan "premium"
select FK_ID_plan, primer_nombre from netflix.usuario where FK_ID_plan = 3;
#Cantidad de usuarios que adquirieron plan "básico"
select FK_ID_plan, primer_nombre from netflix.usuario where FK_ID_plan = 1;
#Cuáles son las series que tienen puntuación mayor a 3.5
select nombre_serie, calificacion from netflix.series where calificacion > 3.5;
#Cuales son las películas que tienen puntuación menor a 3.0
select nombre_serie, calificacion from netflix.series where calificacion < 3.0;
#Series publicadas entre los años 2010 y 2019
select año, nombre_serie from netflix.series where (año>2010 and año<2019);
#Todas las series publicadas excepto las del año 2018
select año, nombre_serie from netflix.series where año <> 2018;
#Usuarios registrados en la base de datos ordenados por primer apellido de forma ascendente.
select primer_apellido, segundo_apellido, primer_nombre, segundo_nombre 
from netflix.usuario 
order by primer_apellido asc;
#Usuarios registrados en la base de datos ordenados por primer apellido de forma descendente.
select primer_apellido, segundo_apellido, primer_nombre, segundo_nombre 
from netflix.usuario 
order by primer_apellido desc;









