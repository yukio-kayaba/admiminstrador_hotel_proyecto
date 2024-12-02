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

