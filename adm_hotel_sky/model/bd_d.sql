USE `bd_hotel`;
DROP procedure IF EXISTS `inicio_sesion`;

DELIMITER $$
USE `bd_hotel`$$
CREATE PROCEDURE `inicio_sesion`(id_user int , valor_token varchar(145))
BEGIN
	declare id_gen int;
	insert into tokens_user(`id_user`,`token`) values (id_user,valor_token);
    set id_gen = LAST_INSERT_ID();
    select  u.nombre,u.apellido,u.dni,t.id_token from usuarios_clientes u,tokens_user t where t.id_token = id_gen; 
END$$

DELIMITER ;

CREATE TABLE `bd_hotel`.`administradores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(245) NULL,
  `nombre` VARCHAR(234) NULL,
  `contra` VARCHAR(145) NULL,
  PRIMARY KEY (`id`));



DELIMITER $$
USE `bd_hotel`$$
CREATE PROCEDURE `inicio_sesion_adm` (correo_d varchar(245),contra_d varchar(145),tokem varchar(145))
BEGIN
	declare id_usuario integer;
    set id_usuario = (SELECT id from administradores where correo = correo_d and contra = contra_d);
    
    if id_usuario != '' then
        Insert into tokens_user(id_user,token) values (id_usuario,tokem);
        set id_tokem = last_insert_id();
        select u.id,u.correo,u.nombre,id_tokem as id_tokem,tokem as tokem from administradores u where id = id_usuario;  
    end if;
END$$

DELIMITER ;


CREATE TABLE `bd_hotel`.`reclamos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_usuario` INT NULL,
  `reclamo` VARCHAR(345) NULL,
  `fecha` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`));




DELIMITER $$
CREATE PROCEDURE `VENTAS_DIARIAS_HORA` (FECHA_DATE DATE)
BEGIN
	select hour(fecha_reservacion) as hora,count(*) as fechas from registro_habitaciones where DATE(fecha_reservacion) = FECHA_DATE group by hour(fecha_reservacion) order by fechas; 
END$$

DELIMITER ;


DELIMITER $$
USE `bd_hotel`$$
CREATE PROCEDURE `suma_reporte_urh` ()
BEGIN
	select sum(h.suma_users) as habitaciones , sum(u.suma_users) as usuarios,sum(r.suma_datos) as reclamos from reporte_habitaciones_dias h, 
	reporte_reclamos_dias r, reporte_usuarios_dias u ;
END$$

DELIMITER ;


DELIMITER $$
USE `bd_hotel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `suma_reporte_urh`(mes varchar(4))
BEGIN
	declare cant_h,cant_clientes,cant_reclamos integer;
	set cant_h = (SELECT count(id_habitacion) FROM registro_habitaciones  where month(fecha_reservacion) = mes );
    set cant_clientes = (SELECT count(id_user) as cant FROM usuarios_clientes where month(fecha_creacion) = mes);
    set cant_reclamos = (select count(id) from reclamos where month(fecha) = "11");
	select cant_h as total_habitacion,cant_clientes as total_clientes ,cant_reclamos as total_reclamos;
   
END$$

DELIMITER ;
