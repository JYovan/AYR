<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class prefactura_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function getMyRecords() {
        try {
            $this->db->select("P.ID, P.Movimiento,P.FechaCreacion AS 'Fecha',P.ClienteNombre AS 'Cliente',P.ProyectoIntelisis AS 'Proyecto Intelisis' ,"
                    . "(CASE WHEN  P.Referencia IS NULL OR P.Referencia =' ' "
                    . "THEN ' -- ' "
                    . "ELSE CONCAT('<strong>',P.Referencia,'</strong>')  END) AS 'Referencia', "
                    . "(CASE WHEN  P.Estatus ='Concluido' THEN CONCAT('<span class=\'label label-success\'>','CONCLUIDO','</span>') "
                    . "WHEN  P.Estatus ='Borrador' THEN CONCAT('<span class=\'label label-default\'>','BORRADOR','</span>')"
                    . "ELSE CONCAT('<span class=\'label label-danger\'>','Cancelado','</span>') END) AS Estatus ,"
                    . "CONCAT(' <span class=\'label label-success\'>$',FORMAT(P.Importe,2),'</span> ') AS Importe,"
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM PREFACTURAS P  "
                    . "INNER JOIN USUARIOS U ON U.ID = P.Usuario_ID WHERE P.ESTATUS in ('Borrador') "
                    . " " , false);

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

    public function getRecords() {
        try {
            $this->db->select("P.ID, P.Movimiento,P.FechaCreacion AS 'Fecha',P.ClienteNombre AS 'Cliente',P.ProyectoIntelisis AS 'Proyecto Intelisis' ,"
                    . "(CASE WHEN  P.Referencia IS NULL OR P.Referencia =' ' "
                    . "THEN ' -- ' "
                    . "ELSE CONCAT('<strong>',P.Referencia,'</strong>')  END) AS 'Referencia', "
                    . "(CASE WHEN  P.Estatus ='Concluido' THEN CONCAT('<span class=\'label label-success\'>','CONCLUIDO','</span>') "
                    . "WHEN  P.Estatus ='Borrador' THEN CONCAT('<span class=\'label label-default\'>','BORRADOR','</span>')"
                    . "ELSE CONCAT('<span class=\'label label-danger\'>','Cancelado','</span>') END) AS Estatus ,"
                    . "CONCAT(' <span class=\'label label-success\'>$',FORMAT(P.Importe,2),'</span> ') AS Importe,"
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM PREFACTURAS P  "
                    . "INNER JOIN USUARIOS U ON U.ID = P.Usuario_ID WHERE P.ESTATUS in ('Concluido') ", false);

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

    public function getPrefacturaByID($ID) {
        try {
            $this->db->select('P.*', false);
            $this->db->from('prefacturas AS P');
            $this->db->where('P.ID', $ID);
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

    public function onAgregar($array) {
        try {
            $this->db->insert("prefacturas", $array);
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

    public function onAgregarDetalle($array) {
        try {
            $this->db->insert("prefacturasdetalle", $array);
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

    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("prefacturas", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Cancelado');
            $this->db->where('ID', $ID);
            $this->db->update("prefacturas");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleByID($IDX) {
        try {
            $this->db->select('
                PD.ID, 
                E.ID E_ID, 
                CONCAT("<strong>",E.FolioCliente,"</strong>") AS "Folio Cliente" ,
                E.TrabajoRequerido AS "Trabajo Requerido",
                S.Nombre AS Sucursal,
                C.Nombre AS Cliente,
                CONCAT("<span class=\'label label-success\'>$",FORMAT(E.Importe,2),"</span>") AS Importe,
                E.Importe AS ImporteSF,
                CONCAT("<span class=\"fa fa-times customButtonDetalleEliminar\" onclick=\"onEliminarPrefacturaDetalle(this,",PD.ID,")\"></span>") AS Eliminar
from prefacturasdetalle PD
left join prefacturas P on  PD.Prefactura_ID = P.ID
left join trabajos E on E.ID = PD.Trabajo_ID
left join sucursales S ON S.ID = E.Sucursal_ID
left join clientes c ON c.ID = E.Cliente_ID', false);
            $this->db->where("P.ID", $IDX);
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

    public function onEliminarPrefacturaDetalle($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('prefacturasdetalle');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarImportePorPrefactura($ID, $DATA) {
        try {
            $this->db->set('Importe', $DATA, FALSE);
            $this->db->where('ID', $ID);
            $this->db->update('prefacturas');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onCambiarEstatusTrabajosPrefacturados($ID) {
        try {
//            $query = $this->db->query("CALL SP_ENTREGADO ('{$ID}')");
            $this->db->set('E.Prefactura_ID', $ID);
            $this->db->where('E.ID = PD.EID');
            $this->db->update("trabajos E, (   SELECT  Trabajo_ID EID     FROM prefacturasdetalle     JOIN prefacturas on prefacturas.ID = prefacturasdetalle.Prefactura_ID  where prefacturas.ID = " . $ID . ") PD");
             //print $str = $this->db->last_query();
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onCancelarCambiarEstatusTrabajosPrefacturados($ID) {
        try {
//            $query = $this->db->query("CALL SP_ENTREGADO ('{$ID}')");
            $this->db->set('E.Prefactura_ID', NULL);
            $this->db->where('E.ID = PD.EID');
            $this->db->update("trabajos E, (   SELECT  Trabajo_ID EID     FROM prefacturasdetalle     JOIN prefacturas on prefacturas.ID = prefacturasdetalle.Prefactura_ID  where prefacturas.ID = " . $ID . ") PD");
        
             //print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onModificarEstatusPagado($ID,$EstatusPago) {
        try {
//            $query = $this->db->query("CALL SP_ENTREGADO ('{$ID}')");
            $this->db->set('E.EstatusTrabajo', $EstatusPago);
            $this->db->where('E.ID = PD.EID');
            $this->db->update("trabajos E, (   SELECT  Trabajo_ID EID     FROM prefacturasdetalle     JOIN prefacturas on prefacturas.ID = prefacturasdetalle.Prefactura_ID  where prefacturas.ID = " . $ID . ") PD");
        
             //print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
}
