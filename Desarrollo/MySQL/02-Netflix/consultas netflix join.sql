use netflix;
#Listar nombres de clientes que adiquirieron plan "Premium"
select primer_nombre, primer_apellido, nombre_plan from netflix.usuario u 
join netflix.plan p on p.ID_plan = u.FK_ID_plan where ID_plan = 3;
#Listar nombres de clientes que adiquirieron plan "Básico"
select primer_nombre, primer_apellido, nombre_plan from netflix.usuario u 
join netflix.plan p on p.ID_plan = u.FK_ID_plan where ID_plan = 1;
#Listar nombres de clientes que adiquirieron plan diferente al "Premium"
select primer_nombre, primer_apellido, nombre_plan from netflix.usuario u 
join netflix.plan p on p.ID_plan = u.FK_ID_plan where ID_plan <> 3;
#Usuarios con rol "cliente" y tipo de documento "cc"
select primer_nombre, primer_apellido, nombre_rol, siglas from netflix.usuario u  
join netflix.rol r on u.FK_ID_rol = r.ID_rol  
join netflix.tipo_documento t on t.ID_documento = u.FK_ID_documento where ID_documento = 1 and ID_rol= 2;
#Usuarios con rol "admin" y tipo de de documento "cc"
select primer_nombre, primer_apellido, nombre_rol, siglas from netflix.usuario u  
join netflix.rol r on u.FK_ID_rol = r.ID_rol  
join netflix.tipo_documento t on t.ID_documento = u.FK_ID_documento where ID_documento = 1 and ID_rol =1;
#Usuarios que tienen tipo de documento diferente a "cc"
select primer_nombre, primer_apellido, siglas from netflix.usuario u  
join netflix.tipo_documento t on t.ID_documento = u.FK_ID_documento where ID_documento <> 1 ;
#Listar usuarios y el tipo de pago que utilizaron y el plan que adquirieron
select primer_nombre, primer_apellido, nombre_tipopago, nombre_plan from netflix.usuario u  
join netflix.factura f on f.FK_ID_numerodocumento = u.Numero_documento 
join netflix.tipo_pago pg on f.FK_ID_tipopago = pg.ID_tipopago
join netflix.plan p on p.ID_plan = u.FK_ID_plan
#Consultas a la tabla factura inidcando, rol, plan, valor, tipo de pago
select nombre_rol, nombre_plan, valor, nombre_tipopago from netflix.factura f 
join netflix.plan pl on f.FK_ID_plan = pl.ID_plan
join netflix.usuario u on f.FK_ID_numerodocumento = u.Numero_documento
join netflix.rol r on u.FK_ID_rol = r.ID_rol
join netflix.tipo_pago tp on f.FK_ID_tipopago = tp.ID_tipopago;
#Listar los usuarios y las series vistas y películas vistas
select nombre_perfil, nombre_pelicula, nombre_serie from netflix.usuario u 
join netflix.perfil pe  on pe.FKUSU_numero_documento = u.Numero_documento
join netflix.perfil_series s2 on s2.FK_ID_perfil = pe.ID_perfil
join netflix.series s on s.ID_serie = s2.FK_ID_serie 
join netflix.perfil_peliculas p2 on p2.peFK_ID_perfil = pe.ID_perfil
join netflix.peliculas p on p.ID_pelicula = p2.peFK_ID_perfil;
#Listar las series y los idiomas en los que se encuentra disponible
select distinct nombre_serie, nombre_idioma from netflix.idioma im
join netflix.idioma_capitulos icap on icap.FK_ID_idioma = im.ID_idioma
join netflix.capitulos cap on cap.ID_capitulo = icap.FK_ID_idioma
join netflix.series s
join netflix.temporadas nt on nt.FK_ID_serie = s.ID_serie;
















