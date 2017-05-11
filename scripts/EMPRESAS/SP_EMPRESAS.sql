USE `ayr`;
DROP procedure IF EXISTS `SP_EMPRESAS`;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_EMPRESAS`()
BEGIN 
	 SELECT 
     E.ID, E.Nombre AS NOMBRE, E.Rfc AS RFC, 
     E.ContactoNombre AS "CONTACTO NOMBRE", E.ContactoApellidos AS "CONTACTO APELLIDOS"
     FROM Empresas AS E
     WHERE E.Estatus IN('ACTIVO');
END$$

DELIMITER ;	

