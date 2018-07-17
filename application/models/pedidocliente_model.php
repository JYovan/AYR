<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class pedidocliente_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
        $this->load->library('session');
        try {
            $this->db->select("T.ID AS ID,"
                    . "ifnull(T.FolioCliente,'--') AS Folio,"
                    . "concat(S.CR,' ',S.Nombre) as Sucursal ,"
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "IFNULL(UPPER(T.TrabajoSolicitado),'') AS TrabajoSolicitado ,"
                    . "(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span class=\'badge badge-secondary\'>','PE','</span>') "
                    . "WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span class=\'badge badge-primary\'>','PRE','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span class=\'badge badge-info\'>','AUT','</span>')"
                    . "WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span class=\'badge badge-light\'>','NO AUT','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span class=\'badge badge-danger\'>','EJE','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span class=\'badge badge-success\'>','FIN','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Facturado' THEN CONCAT('<span class=\'badge badge-warning badge-warning\'>','FACT','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Pagado' THEN CONCAT('<span class=\'badge badge-light\'>','PAG','</span>')"
                    . " END) AS Estatus ,"
                    . "T.Estatus AS Estatus2, "
                    . "(CASE "
                    . "WHEN  T.EstatusTrabajo in ('Autorización','Ejecución','Finalizado','Pagado') "
                    . "THEN CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') "
                    . "WHEN  T.EstatusTrabajo in ('No Autorizado') "
                    . "THEN CONCAT('<strong>','--','</strong>') "
                    . "ELSE  CONCAT('<strong><span style=\'font-size:14px;\' class=\'badge badge-warning\'>','PENDIENTE','</span></strong>') END) AS Importe ,"
                    . "IFNULL(PF.OrdenCompra,'--') AS OrdenCompra,  "
                    . "IFNULL(PF.FechaPago,'--') AS FechaPago,  "
                    . "IFNULL(PF.Referencia,'--') AS FolioFactura,  "
                    . "concat(u.nombre,' ',u.apellidos)as Usuario "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
                    . "LEFT JOIN PREFACTURAS PF ON PF.ID = T.Prefactura_ID "
                    . "LEFT JOIN ESPECIALIDADES E ON E.ID = T.Especialidad_ID "
                    . "LEFT JOIN AREAS A ON A.ID = T.Area_ID "
                    . "WHERE T.Cliente_ID = " . $this->session->userdata('Cliente') . " "
                    . "AND T.ESTATUS in ('Borrador','SinEnviar','Concluido','Entregado') ", false);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar($array) {
        try {
            $this->db->insert("trabajos", $array);
            //   print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajos", $DATA);
            //    print  $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {

            $this->db->where('ID', $ID);
            $this->db->delete("trabajos");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoByID($ID) {
        try {
            $this->db->select('T.*,C.Nombre AS NombreCliente ', false);
            $this->db->from('trabajos AS T');
            $this->db->join('Clientes AS C', 'C.ID = T.Cliente_ID', 'left');
            $this->db->where('T.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
