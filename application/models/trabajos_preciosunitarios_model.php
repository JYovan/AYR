<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class trabajos_preciosunitarios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
        try {
            $this->db->select("T.ID, "
                    . "(CASE WHEN  T.FolioCliente IS NULL OR T.FolioCliente =' ' THEN ' -- ' ELSE T.FolioCliente  END) AS 'Folio', "
                    . "(CASE WHEN  T.EstatusTrabajo ='Pedido' THEN CONCAT('<span class=\'badge badge-secondary\'>','PE','</span>') "
                    . "WHEN  T.EstatusTrabajo ='Presupuesto' THEN CONCAT('<span class=\'badge badge-primary\'>','PRE','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Autorización' THEN CONCAT('<span class=\'badge badge-info\'>','AUT','</span>')"
                    . "WHEN  T.EstatusTrabajo ='No Autorizado' THEN CONCAT('<span class=\'badge badge-light\'>','NO AUT','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Ejecución' THEN CONCAT('<span class=\'badge badge-danger\'>','EJE','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Finalizado' THEN CONCAT('<span class=\'badge badge-success\'>','FIN','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Facturado' THEN CONCAT('<span class=\'badge badge-warning badge-warning\'>','FACT','</span>')"
                    . "WHEN  T.EstatusTrabajo ='Pagado' THEN CONCAT('<span class=\'badge badge-light\'>','PAG','</span>')"
                    . " END) AS Estatus2 ,"
                    . "upper(T.Estatus) AS Estatus, "
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "(CASE WHEN  T.Adjunto IS NULL THEN CONCAT('<span class=\'badge badge-danger\'>','NO','</span>') ELSE CONCAT('<span class=\'badge badge-success\'>','SI','</span>') END) AS Adjunto ,"
                    . "Ct.Nombre as 'Cliente', "
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "CONCAT('<strong>$',FORMAT(ifnull(T.Importe,0),2),'</strong>') AS Importe,"
                    . "IFNULL(UPPER(T.TrabajoRequerido),'') AS 'TrabajoRequerido' ,"
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario', "
                    . "ifnull(T.Importe,0) AS ImporteSinFormato,"
                    . "T.Usuario_ID AS Usuario_ID "
                    . "FROM TRABAJOS T "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "LEFT JOIN CUADRILLAS Cd on Cd.ID = T.Cuadrilla_ID "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
                    . "WHERE T.ESTATUS in ('Borrador','Concluido','Entregado') ", false);
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
                    . 'TDPU.Costo AS Costo,'
                    . 'TDPU.Importe AS Importe,'
                    . 'CONCAT("<span class=\"fa fa-times fa-lg customButtonDetalleEliminar\" '
                    . 'onclick=\"onEliminarDetalle(this,",TDPU.ID,")\"></span>") AS Eliminar ', false);
            $this->db->from("trabajodetallepreciosunitarios AS TDPU");
            $this->db->where("TDPU.TrabajoID", $IDX);
            //$this->db->order_by('tda.ID', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar($array) {
        try {
            $this->db->insert("trabajodetallepreciosunitarios", $array);
            //    print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
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

    public function onEliminarDetalle($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete("trabajodetallepreciosunitarios");
//            print $str = $this->db->last_query();
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
                    . 'tdpu.CostoCte, '
                    . 'tdpu.ImporteCte, '
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

    public function getConceptosXPreciarioID($Preciario) {
        try {
            $this->db->select('PC.ID,'
                    . 'CONCAT("<span class=\"badge badge-danger\">",PC.Clave,"</span>") AS Clave, '
                    . 'CONCAT("<p class=\" CustomDetalleDescripcion \">",UPPER(PC.Descripcion),"</p>") AS Descripcion, '
                    . 'PC.Unidad AS Unidad '
                    . '', false);
            $this->db->from('preciarioconceptos AS PC');
            $this->db->where('PC.Preciarios_ID', $Preciario);
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

    public function getConceptoByID($ID) {
        try {
            $this->db->select('PC.*', false);
            $this->db->from('preciarioconceptos AS PC');
            $this->db->where('PC.ID', $ID);
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

    public function onComprobarExisteConceptoID($ID) {
        try {
            $this->db->select('ConceptoID, pc.Clave, pc.Descripcion ', false);
            $this->db->from('trabajodetallepreciosunitarios tdpu');
            $this->db->join('preciarioconceptos pc', 'on  pc.ID =  tdpu.ConceptoID');
            $this->db->where('tdpu.TrabajoID', $ID);
            $this->db->group_by('tdpu.ConceptoID');
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
