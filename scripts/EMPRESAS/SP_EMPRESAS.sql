USE `ayr`;
DROP procedure IF EXISTS `SP_EMPRESAS`;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_EMPRESAS`()
BEGIN 
	 SELECT 
     E.ID, E.Nombre AS NOMBRE, E.Rfc AS RFC, 
     CONCAT(E.ContactoNombre ,' ',E.ContactoApellidos) AS "CONTACTO "
     FROM Empresas AS E
     WHERE E.Estatus IN('ACTIVO');
END$$

DELIMITER ;	

