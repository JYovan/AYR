USE `ayr`;
DROP procedure IF EXISTS `SP_PRECIARIOS`;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_PRECIARIOS`()
BEGIN 
	 SELECT 
     P.ID, P.Nombre AS NOMBRE, P.Tipo AS TIPO, P.FechaCreacion AS "FECHA DE CREACIÓN", 
     (CASE 
     WHEN P.Cliente_ID IS NULL THEN "NO ESPECÍFICA"
     ELSE (SELECT C.Nombre FROM Clientes AS C WHERE C.ID = P.Cliente_ID)
     END) AS CLIENTE
     FROM preciarios AS P
     WHERE P.Estatus IN('ACTIVO');
END$$

DELIMITER ;	

