USE ayr;
DROP PROCEDURE IF EXISTS SP_COPIAR_DETALLE;
DELIMITER $$
USE `ayr`$$
CREATE PROCEDURE SP_COPIAR_DETALLE (MovID INT, NuevoID INT) 
BEGIN


-- Variables donde almacenamos los datos que devuelve el SELECT
  DECLARE vID int;
  DECLARE vPreciarioConcepto_ID int;
  DECLARE vRenglon int;
  DECLARE vCantidad decimal(14,6);
  DECLARE vUnidad varchar(45);
  DECLARE vPrecio decimal(14,6) ;
  DECLARE vImporte decimal(14,6) ;
  DECLARE vIntExt varchar(45) ;
  DECLARE vMoneda varchar(10) ;
  DECLARE vTipoCambio decimal(4,2) ;
  DECLARE vConcepto varchar(9000) ;
  DECLARE vClave varchar(150);
-- Variable para controlar el fin del bucle
  DECLARE findelbucle INTEGER DEFAULT 0;

 
-- La consulta SELECT que queremos
  DECLARE cur CURSOR FOR 
  SELECT 
	ID,
	PreciarioConcepto_ID,
	Renglon,
	Cantidad,
	Unidad,
	Precio,
	Importe,
	IntExt,
	Moneda,
	TipoCambio,
	Concepto,
	Clave
	FROM trabajosdetalle
	WHERE  Trabajo_ID =MovID; 
-- Cuando no existan mas datos findelbucle se pondra a 1
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET findelbucle=1;
  
-- Abrir el cursosr para iniciar el bucle  
  OPEN cur;
  bucle: LOOP
	-- Incluimos los datos de el select dentro del cursor para su recorrido
    FETCH cur INTO 
    vID,
	vPreciarioConcepto_ID,
	vRenglon,
	vCantidad,
	vUnidad,
	vPrecio,
	vImporte,
	vIntExt,
	vMoneda,
	vTipoCambio,
	vConcepto,
	vClave;
	-- Controlamos el fin del bucle
    IF findelbucle = 1 THEN
       LEAVE bucle;
    END IF;
    -- Insert, Update, Delete, etc
   INSERT INTO trabajosdetalle (
    Trabajo_ID,
	PreciarioConcepto_ID,
	Renglon,
	Cantidad,
	Unidad,
	Precio,
	Importe,
	IntExt,
	Moneda,
	TipoCambio,
	Concepto,
	Clave)
   VALUES (
	NuevoID,
	vPreciarioConcepto_ID,
	vRenglon,
	vCantidad,
	vUnidad,
	vPrecio,
	vImporte,
	vIntExt,
	vMoneda,
	vTipoCambio,
	vConcepto,
	vClave
   );
   SET @ID_DETALLE := LAST_INSERT_ID();
   CALL SP_COPIAR_GENERADOR(vID,@ID_DETALLE);
 
-- Terminamos el ciclo
  END LOOP bucle;
-- Cerramos el cursor
  CLOSE cur;
END$$
DELIMITER ;



