USE ayr;
DROP PROCEDURE IF EXISTS SP_COPIAR_GENERADOR;
DELIMITER $$
USE `ayr`$$
CREATE PROCEDURE SP_COPIAR_GENERADOR (ID_D_ANT INT, NuevoID_D INT) 
BEGIN
    -- Insert, Update, Delete, etc
   INSERT INTO generadortrabajosdetalle (
	Concepto_ID,
	Area,
	Eje,
	EntreEje1,
	EntreEje2,
	Largo,
	Ancho,
	Alto,
	Cantidad,
	Total,
	IdTrabajoDetalle,
    EstimacionNo)
  SELECT 
	Concepto_ID,
	Area,
	Eje,
	EntreEje1,
	EntreEje2,
	Largo,
	Ancho,
	Alto,
	Cantidad,
	Total,
	NuevoID_D,
    EstimacionNo
	FROM generadortrabajosdetalle
	WHERE  IdTrabajoDetalle =ID_D_ANT; 

END$$
DELIMITER ;