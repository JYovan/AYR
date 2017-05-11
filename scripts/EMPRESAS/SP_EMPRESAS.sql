USE `ayr`;
DROP procedure IF EXISTS `SP_EMPRESAS`;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_EMPRESAS`()
BEGIN 
	 SELECT 
     E.ID, E.Nombre AS NOMBRE, E.Rfc AS RFC, 
     E.ContactoNombre AS "CONTACTO NOMBRE", E.ContactoApellidos AS "CONTACTO APELLIDOS", 
     E.Direccion AS "DIRECCIÓN", E.NoExterior AS "NÚMERO EXT.", E.NoInterior AS "NÚMERO INT.", E.CodigoPostal AS "CÓDIGO POSTAL", E.Colonia AS COLONIA, E.Ciudad AS CIUDAD, E.Estado AS ESTADO
     FROM Empresas AS E
     WHERE E.Estatus IN('ACTIVO');
END$$

DELIMITER ;	

