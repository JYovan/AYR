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
T.ID,T.FolioCliente AS 'Folio Cliente', 
STR_TO_DATE( T.FechaCreacion ,'%d/%m/%Y ')  AS Fecha,
CTE.Nombre, CONCAT(S.CR,' - ',S.Nombre) AS Sucursal,
IFNULL(T.TrabajoRequerido,'') AS 'Trabajo Requerido',
CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') AS Importe,
(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span class=\'label label-primary\'>','PEDIDO','</span>') 
WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span class=\'label label-warning\'>','PRESUPUESTO','</span>')
WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span class=\'label label-info\'>','AUTORIZACIÓN','</span>')
WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span class=\'label label-danger\'>','EJECUCIÓN','</span>')
WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span class=\'label label-success\'>','FINALIZADO','</span>')
WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span class=\'label label-NoAutorizadoTablero\'>','NO AUTORIZADO','</span>')
ELSE CONCAT('<span class=\'label label-danger label-pagado \'>','PAGADO','</span>') END) AS 'Estatus Trabajo',
(CASE WHEN  T.Estatus ='Concluido' THEN CONCAT('<span class=\'label label-NoAutorizadoTablero\'>','SIN ENTREGAR','</span>') 
WHEN  T.Estatus ='Entregado' THEN CONCAT('<span class=\'label label-info\'>','ENTREGADO','</span>')
ELSE CONCAT('<span class=\'label label-danger label-pagado \'>','CANCELADO','</span>') END) AS 'Estatus Entrega',
IFNULL(E.NoEntrega,'') AS 'No. Entrega',
IFNULL(PF.Referencia,'') AS 'Factura Intelisis',
IFNULL(PF.OrdenCompra,'') AS 'Orden Compra',
IFNULL(PF.FormaPago,'') AS 'Forma Pago',
IFNULL(PF.FechaPago,'') AS 'Fecha Pago'
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
