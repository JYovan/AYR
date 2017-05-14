USE `ayr`;
DROP procedure IF EXISTS `SP_SUCURSALES`;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_SUCURSALES`()
BEGIN 
	 SELECT S.ID, S.CR AS CR, S.Region AS "REGIÓN"
     FROM sucursales AS S;
    
END$$

DELIMITER ;	



