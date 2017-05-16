USE `ayr`;
DROP procedure IF EXISTS `SP_USUARIOS`;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIOS`()
BEGIN 
	 SELECT 
     ID, (CASE 
     WHEN U.Empresa_ID IS NULL THEN "NO ESPECIFICO"
     ELSE (SELECT E.Nombre FROM empresas AS E WHERE E.ID = U.Empresa_ID)
     END) AS EMPRESA, Usuario AS USUARIO,CONCAT(U.Nombre, ' ', U.Apellidos) AS "NOMBRE", u.ESTATUS, U.TipoAcceso AS "ACCESO" d
     
     FROM Usuarios AS U
     WHERE U.Estatus IN('ACTIVO');
END$$

DELIMITER ;

