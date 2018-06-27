USE ayr;
DROP procedure IF EXISTS SP_COPIAR_MOVIMIENTO;

DELIMITER $$
USE `ayr`$$
CREATE DEFINER=root@localhost PROCEDURE SP_COPIAR_MOVIMIENTO(IDX INT, UsuarioX INT)
BEGIN 

INSERT INTO trabajos  
(FechaCreacion,
Cliente_ID,
Sucursal_ID,
Preciario_ID,
Especialidad_ID,
Cuadrilla_ID,
FolioCliente,
FechaAtencion,
Codigoppta_ID,
Solicitante,
TrabajoSolicitado,
TrabajoRequerido,
FechaOrigen,
HoraOrigen,
FechaLlegada,
HoraLlegada,
FechaSalida,
HoraSalida,
ImpactoEnPlazo,
DiasImpacto,
CausaTrabajo,
ClaveOrigenTrabajo,
EspecificaOrigenTrabajo,
DescripcionOrigenTrabajo,
DescripcionRiesgoTrabajo,
DescripcionAlcanceTrabajo,
Adjunto,
Usuario_ID,
Estatus,
Importe,
Observaciones,
CentroCostos_ID,
ControlProceso,
Area_ID,
CausaActuacionSintoma,
TextoCausa,
Cal1,
Cal2,
Cal3,
Cal4,
Cal5,
EstatusTrabajo,
FechaVisita,
EncargadoSitio,
HorarioAtencion,
RestriccionAcceso,
AireAcondicionado,
Carcasa,
UPS,
SenalizacionInterior,
SenalizacionExterior,
CanalizacionDatos,
CanalizacionSeguridad,
PruebaCalaFirme,
TipoPiso)
SELECT  
FechaCreacion,
Cliente_ID,
Sucursal_ID,
Preciario_ID,
Especialidad_ID,
Cuadrilla_ID,
FolioCliente,
FechaAtencion,
Codigoppta_ID,
Solicitante,
TrabajoSolicitado,
TrabajoRequerido,
FechaOrigen,
HoraOrigen,
FechaLlegada,
HoraLlegada,
FechaSalida,
HoraSalida,
ImpactoEnPlazo,
DiasImpacto,
CausaTrabajo,
ClaveOrigenTrabajo,
EspecificaOrigenTrabajo,
DescripcionOrigenTrabajo,
DescripcionRiesgoTrabajo,
DescripcionAlcanceTrabajo,
NULL AS Adjunto,
UsuarioX,
'Borrador' AS Estatus,
Importe,
Observaciones,
CentroCostos_ID,
ControlProceso,
Area_ID,
CausaActuacionSintoma,
TextoCausa,
Cal1,
Cal2,
Cal3,
Cal4,
Cal5,
'Presupuesto' AS EstatusTrabajo,
FechaVisita,
EncargadoSitio,
HorarioAtencion,
RestriccionAcceso,
AireAcondicionado,
Carcasa,
UPS,
SenalizacionInterior,
SenalizacionExterior,
CanalizacionDatos,
CanalizacionSeguridad,
PruebaCalaFirme,
TipoPiso
FROM trabajos 
WHERE  ID =IDX;


SET @ID_Trabajo := LAST_INSERT_ID();
call SP_COPIAR_DETALLE(IDX , @ID_Trabajo);

select @ID_Trabajo AS ID;
  
END $$
DELIMITER ;
