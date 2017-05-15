USE `ayr`;
DROP procedure IF EXISTS `SP_CUADRILLAS`;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_CUADRILLAS`()
BEGIN 
	 SELECT 
     C.ID, C.Nombre AS CUADRILLA    FROM Cuadrillas AS C
     WHERE C.Estatus IN('ACTIVO');
END$$

DELIMITER ;	