/*10 05 2017*/

ALTER TABLE `ayr`.`usuarios` 
CHANGE COLUMN `Estatus` `Estatus` VARCHAR(45) NOT NULL DEFAULT 'ACTIVO' ;


ALTER TABLE `ayr`.`empresas` 
ADD COLUMN `Estatus` VARCHAR(45) NULL AFTER `Estado`,
ADD COLUMN `Registro` VARCHAR(45) NULL AFTER `Estatus`;

UPDATE `ayr`.`empresas` SET Estatus = 'ACTIVO' WHERE ID > 0;
ALTER TABLE `ayr`.`empresas` 
CHANGE COLUMN `Estatus` `Estatus` VARCHAR(45) NOT NULL DEFAULT 'ACTIVO' ;

ALTER TABLE `ayr`.`Cuadrillas` 
ADD COLUMN `Estatus`  VARCHAR(45) NOT NULL DEFAULT 'ACTIVO' ;

ALTER TABLE `ayr`.`preciarios` 
CHANGE COLUMN `EstaActivo` `Estatus` VARCHAR(45) NULL DEFAULT 'ACTIVO' ;

ALTER TABLE `ayr`.`preciarios` 
DROP COLUMN `Preciarioscol`;

ALTER TABLE `ayr`.`clientes` 
ADD COLUMN `Estatus` VARCHAR(45) NOT NULL DEFAULT 'ACTIVO' AFTER `Contacto3`,
ADD COLUMN `Registro` VARCHAR(45) NULL AFTER `Estatus`;

ALTER TABLE `ayr`.`empresassupervisoras` 
ADD COLUMN `Estatus`  VARCHAR(45) NOT NULL DEFAULT 'ACTIVO' ;