<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class exploradorServicios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $query = $this->db->query("SELECT
T.ID,
T.FolioCliente AS FolioCliente,
STR_TO_DATE( T.FechaCreacion ,'%d/%m/%Y ')  AS Fecha,
CTE.Nombre,
CONCAT(S.CR,' - ',S.Nombre) AS Sucursal,
IFNULL(T.TrabajoRequerido,'') AS TrabajoRequerido,
CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') AS Importe,
(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-primary\'>','PEDIDO','</span>')
WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-secondary\'>','PRESUPUESTO','</span>')
WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-success\'>','AUTORIZACIÓN','</span>')
WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-danger\'>','EJECUCIÓN','</span>')
WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-warning\'>','FINALIZADO','</span>')
WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-info\'>','NO AUTORIZADO','</span>')
ELSE CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-light \'>','PAGADO','</span>') END) AS EstatusTrabajo,

(CASE WHEN  T.Estatus ='Concluido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-secondary\'>','SIN ENTREGAR','</span>')
WHEN  T.Estatus ='Entregado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-info\'>','ENTREGADO','</span>')
ELSE CONCAT('<span class=\'badge badge-danger \'>','CANCELADO','</span>') END) AS EstatusEntrega,
IFNULL(E.NoEntrega,'') AS NoEntrega,
IFNULL(PF.Referencia,'') AS FacturaIntelisis,
IFNULL(PF.OrdenCompra,'') AS OrdenCompra,
IFNULL(PF.FormaPago,'') AS FormaPago,
IFNULL(PF.FechaPago,'') AS FechaPago
FROM TRABAJOS T
LEFT JOIN CLIENTES CTE ON CTE.ID = T.CLIENTE_ID
LEFT JOIN SUCURSALES S ON S.ID = T.SUCURSAL_ID
LEFT JOIN ENTREGAS E ON E.ID = T.ENTREGA_ID
LEFT JOIN PREFACTURAS PF ON PF.ID = T.PREFACTURA_ID
WHERE T.ESTATUS IN ('Concluido','Entregado')
AND T.EstatusTrabajo IN ('Presupuesto','Autorización','Finalizado','Pagado') "
                    . " ");

            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
