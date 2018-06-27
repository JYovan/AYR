<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class plantillas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
        try {
            $this->db->select("T.ID, "
                    . "upper(T.Nombre) AS Nombre, "
                    . "T.Fecha as 'Fecha' , "
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM Plantillas T "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
                    . "WHERE T.ESTATUS in ('Activo') ", false);
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

    public function getPlantillas() {
        try {
            $this->db->select("T.ID, "
                    . "upper(T.Nombre) AS Nombre "
                    . "FROM Plantillas T "
                    . "WHERE T.ESTATUS in ('Activo') ", false);
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

    public function getConceptosPlantillasByID($IDX) {
        try {
            $this->db->select('TD.*,'
                    . '  ', false);
            $this->db->from("plantillasdetalle AS TD");
            $this->db->where("TD.Plantilla_ID", $IDX);
            $this->db->order_by('TD.ID', 'DESC');
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

    public function getPlantillaDetalleByID($IDX) {
        try {
            $this->db->select('TD.ID AS ID,'
                    . 'CONCAT("<span class=\'badge badge-info \'>",TD.Clave,"</span>") AS "Clave",'
                    . 'ifnull(TD.IntExt,"") AS "IntExt",'
                    . 'CONCAT("<p class=\" CustomDetalleDescripcion \">",UPPER(TD.Concepto),"</p>") AS Descripcion, '
                    . 'TD.Unidad, '
                    . 'CONCAT("$",FORMAT(TD.Precio,6)) AS Precio,'
                    . '(CASE '
                    . 'WHEN TD.Moneda = "USD" THEN '
                    . 'CONCAT("<span class=\'badge badge-danger\'>",TD.Moneda,"</span>") '
                    . 'ELSE CONCAT("<span class=\'\'>",TD.Moneda,"</span>") '
                    . 'END) AS "Moneda", '
                    . 'CONCAT("<span class=\"fa fa-times fa-lg \" onclick=\"onEliminarConceptoXDetalle(this,",TD.ID,")\"></span>") AS Eliminar, '
                    . 'TD.PreciarioConcepto_ID AS PCID,'
                    . "CASE WHEN IFNULL(PC.PreciarioCategorias_ID,0) = 0 "
                    . "THEN 'Z-OTROS' "
                    . "ELSE CONCAT(PCAT.Clave,' - ',PCAT.Descripcion) END AS Categoria"
                    . '  ', false);
            $this->db->from("plantillasdetalle AS TD");
            $this->db->join("preciarioconceptos AS PC", "PC.ID = TD.PreciarioConcepto_ID", 'LEFT');
            $this->db->join("preciariocategorias AS PCAT", "PCAT.ID = PC.PreciarioCategorias_ID", 'LEFT');
            $this->db->where("TD.Plantilla_ID", $IDX);
            //$this->db->order_by('TD.ID', 'DESC');
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

    public function onAgregar($array) {
        try {
            $this->db->insert("plantillas", $array);
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
            $this->db->insert("plantillasdetalle", $array);
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
            $this->db->update("plantillas", $DATA);
            //    print  $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarTrabajoDetalle($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            //$this->db->where('Trabajo_ID', $Trabajo_ID);
            $this->db->update("plantillasdetalle", $DATA);
            //   print  $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Inactivo');
            $this->db->where('ID', $ID);
            $this->db->update("plantillas");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPlantillaByID($ID) {
        try {
            $this->db->select('T.*', false);
            $this->db->from('plantillas AS T');
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

    public function getConceptosXPreciarioID($ID, $Plantilla_ID) {
        try {
            $this->db->select('PC.ID,'
                    . 'CONCAT("<span class=\"badge badge-danger\">",PC.Clave,"</span>") AS Clave, '
                    . 'CONCAT("<p class=\" CustomDetalleDescripcion \">",UPPER(PC.Descripcion),"</p>") AS Descripcion, '
                    . 'PC.Unidad AS Unidad, '
                    . 'CONCAT("<span class=\"badge badge-success\">$",FORMAT(PC.Costo,2),"</span>") AS Costo, '
                    . 'PC.Moneda AS Moneda', false);
            $this->db->from('preciarioconceptos AS PC');
            $this->db->where('PC.Preciarios_ID', $ID);
            $this->db->where("PC.ID NOT IN(SELECT TD.PreciarioConcepto_ID FROM plantillasdetalle TD WHERE  TD.Plantilla_ID = $Plantilla_ID ) ", null, false);
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

    public function getDetalleByID($ID) {
        try {
            $this->db->select('td.*', false);
            $this->db->from('plantillasdetalle td');
            $this->db->where('td.ID', $ID);
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

    public function onEliminarConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('plantillasdetalle');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
