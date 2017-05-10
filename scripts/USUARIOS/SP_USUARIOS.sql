USE `ayr`;
DROP procedure IF EXISTS `SP_USUARIOS`;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIOS`()
BEGIN 
	 SELECT 
     ID, Usuario AS USUARIO, U.Estatus, U.Nombre, U.Apellidos, U.TipoAcceso AS "TIPO DE ACCESO", 
     (CASE 
     WHEN U.Empresa_ID IS NULL THEN "NO ESPECIFICO"
     ELSE (SELECT E.Nombre FROM empresas AS E WHERE E.ID = U.Empresa_ID)
     END) AS EMPRESA
     FROM Usuarios AS U
     WHERE U.Estatus IN('ACTIVO');
END$$

DELIMITER ;

