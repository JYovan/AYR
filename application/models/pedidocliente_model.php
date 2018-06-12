<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class pedidocliente_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecordsAutorizacion() {
        $this->load->library('session');
        try {
            $this->db->select("T.ID AS ID,"
                    . "ifnull(T.FolioCliente,'--') AS Folio,"
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "IFNULL(T.TrabajoRequerido,'') AS 'Trabajo Requerido' ,"
                    . "(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-primary\'>','PEDIDO','</span>')
WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-secondary\'>','PRESUPUESTO','</span>')
WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-success\'>','AUTORIZACIÓN','</span>')
WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-danger\'>','EJECUCIÓN','</span>')
WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-warning\'>','FINALIZADO','</span>')
WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-info\'>','NO AUTORIZADO','</span>')
ELSE CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-light \'>','PAGADO','</span>') END) AS Estatus,"
                    . "(CASE "
                    . "WHEN  T.EstatusTrabajo in ('Autorización','Ejecución','Finalizado','Pagado') "
                    . "THEN CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') "
                    . "WHEN  T.EstatusTrabajo in ('No Autorizado') "
                    . "THEN CONCAT('<strong>','--','</strong>') "
                    . "ELSE  CONCAT('<strong><span style=\'font-size:14px;\' class=\'badge badge-warning\'>','PENDIENTE','</span></strong>') END) AS Importe ,"
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
                    . "LEFT JOIN ESPECIALIDADES E ON E.ID = T.Especialidad_ID "
                    . "LEFT JOIN AREAS A ON A.ID = T.Area_ID "
                    . "WHERE T.Cliente_ID = " . $this->session->userdata('Cliente') . " "
                    . "AND T.EstatusTrabajo in ('Autorización')"
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

    public function getRecordsFinalizadosPagados() {
        $this->load->library('session');
        try {
            $this->db->select("T.ID AS ID,"
                    . "ifnull(T.FolioCliente,'--') AS Folio,"
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "IFNULL(T.TrabajoRequerido,'') AS 'Trabajo Requerido' ,"
                    . "(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-primary\'>','PEDIDO','</span>')
WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-secondary\'>','PRESUPUESTO','</span>')
WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-success\'>','AUTORIZACIÓN','</span>')
WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-danger\'>','EJECUCIÓN','</span>')
WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-warning\'>','FINALIZADO','</span>')
WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-info\'>','NO AUTORIZADO','</span>')
ELSE CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-light \'>','PAGADO','</span>') END) AS Estatus,"
                    . "(CASE "
                    . "WHEN  T.EstatusTrabajo in ('Autorización','Ejecución','Finalizado','Pagado') "
                    . "THEN CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') "
                    . "WHEN  T.EstatusTrabajo in ('No Autorizado') "
                    . "THEN CONCAT('<strong>','--','</strong>') "
                    . "ELSE  CONCAT('<strong><span style=\'font-size:14px;\' class=\'badge badge-warning\'>','PENDIENTE','</span></strong>') END) AS Importe ,"
                    . "IFNULL(PF.OrdenCompra,'--') AS 'Orden de Compra',  "
                    . "IFNULL(PF.FechaPago,'--') AS 'Fecha Pago',  "
                    . "IFNULL(PF.Referencia,'--') AS 'Folio Factura',  "
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
                    . "LEFT JOIN PREFACTURAS PF ON PF.ID = T.Prefactura_ID "
                    . "LEFT JOIN ESPECIALIDADES E ON E.ID = T.Especialidad_ID "
                    . "LEFT JOIN AREAS A ON A.ID = T.Area_ID "
                    . "WHERE T.Cliente_ID = " . $this->session->userdata('Cliente') . " "
                    . "AND T.EstatusTrabajo in ('Pagado')"
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

    public function getRecordsFinalizadosNoPagados() {
        $this->load->library('session');
        try {
            $this->db->select("T.ID AS ID,"
                    . "ifnull(T.FolioCliente,'--') AS Folio,"
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "IFNULL(T.TrabajoRequerido,'') AS 'Trabajo Requerido' ,"
                    . "(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-primary\'>','PEDIDO','</span>')
WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-secondary\'>','PRESUPUESTO','</span>')
WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-success\'>','AUTORIZACIÓN','</span>')
WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-danger\'>','EJECUCIÓN','</span>')
WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-warning\'>','FINALIZADO','</span>')
WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-info\'>','NO AUTORIZADO','</span>')
ELSE CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-light \'>','PAGADO','</span>') END) AS Estatus,"
                    . "(CASE "
                    . "WHEN  T.EstatusTrabajo in ('Autorización','Ejecución','Finalizado','Pagado') "
                    . "THEN CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') "
                    . "WHEN  T.EstatusTrabajo in ('No Autorizado') "
                    . "THEN CONCAT('<strong>','--','</strong>') "
                    . "ELSE  CONCAT('<strong><span style=\'font-size:14px;\' class=\'badge badge-warning\'>','PENDIENTE','</span></strong>') END) AS Importe ,"
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
                    . "LEFT JOIN ESPECIALIDADES E ON E.ID = T.Especialidad_ID "
                    . "LEFT JOIN AREAS A ON A.ID = T.Area_ID "
                    . "WHERE T.Cliente_ID = " . $this->session->userdata('Cliente') . " "
                    . "AND T.EstatusTrabajo in ('Finalizado')"
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

    public function getRecordsEnFirme() {
        $this->load->library('session');
        try {
            $this->db->select("T.ID AS ID,"
                    . "ifnull(T.FolioCliente,'--') AS Folio,"
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "IFNULL(T.TrabajoRequerido,'') AS 'Trabajo Requerido' ,"
                    . "(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-primary\'>','PEDIDO','</span>')
WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-secondary\'>','PRESUPUESTO','</span>')
WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-success\'>','AUTORIZACIÓN','</span>')
WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-danger\'>','EJECUCIÓN','</span>')
WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-warning\'>','FINALIZADO','</span>')
WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-info\'>','NO AUTORIZADO','</span>')
ELSE CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-light \'>','PAGADO','</span>') END) AS Estatus,"
                    . "(CASE "
                    . "WHEN  T.EstatusTrabajo in ('Autorización','Ejecución','Finalizado','Pagado') "
                    . "THEN CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') "
                    . "WHEN  T.EstatusTrabajo in ('No Autorizado') "
                    . "THEN CONCAT('<strong>','--','</strong>') "
                    . "ELSE  CONCAT('<strong><span style=\'font-size:14px;\' class=\'badge badge-warning\'>','PENDIENTE','</span></strong>') END) AS Importe ,"
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
                    . "LEFT JOIN ESPECIALIDADES E ON E.ID = T.Especialidad_ID "
                    . "LEFT JOIN AREAS A ON A.ID = T.Area_ID "
                    . "WHERE T.Cliente_ID = " . $this->session->userdata('Cliente') . " "
                    . "AND T.EstatusTrabajo in ('Pedido','Presupuesto','Ejecución')"
                    . "AND T.ESTATUS in ('Borrador','SinEnviar','Concluido') ", false);
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

    public function getRecords() {
        $this->load->library('session');
        try {
            $this->db->select("T.ID AS ID,"
                    . "ifnull(T.FolioCliente,'--') AS Folio,"
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "IFNULL(T.TrabajoRequerido,'') AS 'Trabajo Requerido' ,"
                    . "(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-primary\'>','PEDIDO','</span>')
WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-secondary\'>','PRESUPUESTO','</span>')
WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-success\'>','AUTORIZACIÓN','</span>')
WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-danger\'>','EJECUCIÓN','</span>')
WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-warning\'>','FINALIZADO','</span>')
WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-info\'>','NO AUTORIZADO','</span>')
ELSE CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-light \'>','PAGADO','</span>') END) AS Estatus,"
                    . "(CASE "
                    . "WHEN  T.EstatusTrabajo in ('Autorización','Ejecución','Finalizado','Pagado') "
                    . "THEN CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') "
                    . "WHEN  T.EstatusTrabajo in ('No Autorizado') "
                    . "THEN CONCAT('<strong>','--','</strong>') "
                    . "ELSE  CONCAT('<strong><span style=\'font-size:14px;\' class=\'badge badge-warning\'>','PENDIENTE','</span></strong>') END) AS Importe ,"
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
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
            $this->db->select('T.*', false);
            $this->db->from('trabajos AS T');
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
