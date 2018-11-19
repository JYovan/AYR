<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class trabajos_preciosunitariosClientes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
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
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoDetalleAbiertoByID($IDX) {
        try {
            $this->db->select('TDPU.ID AS ID,'
                    . 'TDPU.Categoria AS Categoria,'
                    . 'TDPU.Clave AS Clave, '
                    . 'UPPER(TDPU.Descripcion) AS Descripcion, '
                    . 'TDPU.Unidad AS Unidad,'
                    . 'TDPU.Cantidad AS Cantidad,'
                    . 'TDPU.Costo AS CostoAYR,'
                    . 'TDPU.Importe AS ImporteAYR, '
                    . "CASE "
                    . " WHEN IFNULL(TDPU.CostoTemp,'') = '' THEN "
                    . "CONCAT('<input type=\'text\' onkeypress= ''validate(event,this.value);''  onpaste= ''return false;''   class=\'form-control form-control-sm numbersOnly\'  onchange=\'onCapturarCantidad(this.value,',TDPU.ID,',',TDPU.Cantidad,',)\'  >','') "
                    . "ELSE "
                    . "CONCAT('<input type=\'text\' onkeypress= ''validate(event,this.value);''  onpaste= ''return false;''  class=\'form-control form-control-sm numbersOnly\'  value=\'',TDPU.CostoTemp,'\'   onchange=\'onCapturarCantidad(this.value,',TDPU.ID,',',TDPU.Cantidad,',)\'  >','') "
                    . "END AS Costo, "
                    . 'TDPU.ImporteTemp AS Importe'
                    . ' ', false);
            $this->db->from("trabajodetallepreciosunitarios AS TDPU");
            $this->db->where("TDPU.TrabajoID", $IDX);
            //$this->db->order_by('tda.ID', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoByID($ID) {
        try {
            $this->db->select("T.*,C.Nombre AS Cliente, "
                    . "CONCAT(S.CR,' - ',S.Nombre) As Sucursal, "
                    . "P.Nombre As Preciario, "
                    . "CC.Descripcion AS CentroCosto, "
                    . "A.Descripcion AS Area, "
                    . 'E.Descripcion As Especialidad ', false);
            $this->db->from('trabajos AS T');
            $this->db->join('clientes AS C', 'ON C.ID = T.Cliente_ID');
            $this->db->join('sucursales AS S', 'ON S.Cliente_ID = C.ID');
            $this->db->join('preciarios AS P', 'ON T.Preciario_ID = P.ID');
            $this->db->join('centrocostos AS CC', 'ON T.CentroCostos_ID = CC.ID', 'LEFT');
            $this->db->join('areas AS A', 'ON T.Area_ID = A.ID', 'LEFT');
            $this->db->join('especialidades AS E', 'ON T.Especialidad_ID = E.ID', 'LEFT');
            $this->db->where('T.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalle($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            //$this->db->where('Trabajo_ID', $Trabajo_ID);
            $this->db->update("trabajodetallepreciosunitarios", $DATA);
            //   print  $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarTemp($ID) {
        try {
            $this->db->set('CostoTemp', 0);
            $this->db->set('ImporteTemp', 0);
            $this->db->where('TrabajoID', $ID);
            $this->db->update("trabajodetallepreciosunitarios");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCategorias($ID) {
        try {
            $this->db->select('Categoria  ', false);
            $this->db->from('trabajodetallepreciosunitarios');
            $this->db->where('TrabajoID', $ID);
            $this->db->group_by('Categoria');
            $this->db->order_by('Categoria', 'ASC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciosUnitarios($ID) {
        try {
            $this->db->select('tdpu.Clave, '
                    . 'tdpu.Descripcion, '
                    . 'tdpu.Cantidad, '
                    . 'tdpu.Unidad, '
                    . 'tdpu.Costo, '
                    . 'tdpu.Importe , '
                    . 'tdpu.Categoria, '
                    . 'tdpu.CostoTemp AS CostoCte, '
                    . 'tdpu.ImporteTemp AS ImporteCte, '
                    . 'pc.Unidad AS UnidadConcepto, '
                    . 'pc.Clave AS ClaveConcepto, '
                    . 'pc.Descripcion As DescConcepto '
                    . '', false);
            $this->db->from('trabajodetallepreciosunitarios tdpu');
            $this->db->join('preciarioconceptos pc', 'on pc.ID = tdpu.ConceptoID', 'left');
            $this->db->where('tdpu.TrabajoID', $ID);
            $this->db->order_by('tdpu.Categoria', 'ASC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
