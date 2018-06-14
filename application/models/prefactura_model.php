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
            $this->db->select("P.ID, "
                    . "P.FechaCreacion AS 'Fecha',"
                    . "P.ClienteNombre AS 'Cliente',"
                    . "P.ProyectoIntelisis AS 'ProyectoIntelisis' ,"
                    . "(CASE WHEN  P.Referencia IS NULL OR P.Referencia =' ' "
                    . "THEN ' -- ' "
                    . "ELSE CONCAT('<strong>',P.Referencia,'</strong>')  END) AS 'Referencia', "
                    . "(CASE WHEN  P.Estatus ='Concluido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-success\'>','CONCLUIDO','</span>') "
                    . "WHEN  P.Estatus ='Borrador' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-secondary\'>','BORRADOR','</span>')"
                    . "ELSE CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-danger\'>','Cancelado','</span>') END) AS Estatus ,"
                    . "CONCAT(' <span style=\'font-size:14px;\' class=\'badge badge-info\'>$',FORMAT(P.Importe,2),'</span> ') AS Importe,"
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM PREFACTURAS P  "
                    . "INNER JOIN USUARIOS U ON U.ID = P.Usuario_ID WHERE P.ESTATUS in ('Borrador') "
                    . " ", false);

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
            $this->db->select("P.ID, P.Movimiento,P.FechaCreacion AS 'Fecha',P.ClienteNombre AS 'Cliente',P.ProyectoIntelisis AS 'ProyectoIntelisis' ,"
                    . "(CASE WHEN  P.Referencia IS NULL OR P.Referencia =' ' "
                    . "THEN ' -- ' "
                    . "ELSE CONCAT('<strong>',P.Referencia,'</strong>')  END) AS 'Referencia', "
                    . "(CASE WHEN  P.Estatus ='Concluido' THEN CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-success\'>','CONCLUIDO','</span>') "
                    . "WHEN  P.Estatus ='Borrador' THEN CONCAT('<span class=\'badge badge-secondary\'>','BORRADOR','</span>')"
                    . "ELSE CONCAT('<span style=\'font-size:14px;\' class=\'badge badge-danger\'>','Cancelado','</span>') END) AS Estatus ,"
                    . "CONCAT(' <span style=\'font-size:14px;\' class=\'badge badge-info\'>$',FORMAT(P.Importe,2),'</span> ') AS Importe,"
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
                CONCAT("<strong>",E.FolioCliente,"</strong>") AS FolioCliente  ,
                E.TrabajoRequerido AS "TrabajoRequerido",
                S.Nombre AS Sucursal,
                C.Nombre AS Cliente,
                CONCAT("<span style=\'font-size:14px;\' class=\'badge badge-success\'>$",FORMAT(E.Importe,2),"</span>") AS Importe,
                CONCAT("<span class=\"fa fa-times \" onclick=\"onEliminarPrefacturaDetalle(this,",PD.ID,")\"></span>") AS Eliminar,
                E.Importe AS ImporteSF
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

    public function getTrabajosEntregadosParaPrefactura() {
        try {
            $this->db->select('T.ID AS "Folio Interno",'
                    . 'T.FolioCliente AS "Folio Cliente" , '
                    . ' STR_TO_DATE( T.FechaCreacion ,"%d/%m/%Y" )  AS Fecha,'
                    . 'Cte.Nombre As Cliente,'
                    . 'S.Nombre AS Sucursal,S.Region,'
                    . 'CONCAT("<span class=\'label label-success\'>$",FORMAT(T.Importe,2),"</span>") AS Importe, '
                    . 'ifnull(E.Descripcion,"N/E") AS Especialidad '
                    . 'FROM Trabajos T '
                    . 'INNER join Clientes Cte ON Cte.ID = T.Cliente_ID '
                    . 'INNER join SUCURSALES S ON S.ID = T.Sucursal_ID '
                    . 'LEFT JOIN ESPECIALIDADES E ON T.Especialidad_ID = E.ID', false);
            $this->db->where('T.Prefactura_ID IS NULL');
            $this->db->where_in('T.Estatus', array('Entregado'));
            $this->db->where_in('T.EstatusTrabajo', array('Finalizado'));

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

    public function onModificarEstatusPagado($ID, $EstatusPago) {
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
