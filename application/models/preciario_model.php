<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class preciario_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $query = $this->db->query("CALL SP_PRECIARIOS()");

            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciarioByID($ID) {
        try {
            $this->db->select('*', false);
            $this->db->from('preciarios AS P');
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

    public function getConceptosXPreciarioID($ID) {
        try {
            $this->db->select('PC.ID,CONCAT("<span class=\"label label-danger\">",PC.Clave,"</span>") AS CLAVE, PC.Descripcion AS "DESCRIPCIÓN", PC.Unidad AS UNIDAD, CONCAT("<span class=\"label label-success\">$",FORMAT(PC.Costo,2),"</span>") AS PRECIO, PC.Moneda AS MONEDA', false);
            $this->db->from('preciarioconceptos AS PC');
            $this->db->where('PC.Preciarios_ID', $ID);
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

    public function getConceptoByClaveXDescripcion($ID, $CLAVE, $DESCRIPCION) {
        try { 
            $this->db->select('PC.ID,CONCAT("<span class=\"label label-danger\">",PC.Clave,"</span>") AS CLAVE, PC.Descripcion AS "DESCRIPCIÓN", PC.Unidad AS UNIDAD, CONCAT("<span class=\"label label-success\">$",FORMAT(PC.Costo,2),"</span>") AS COSTO, PC.Moneda AS MONEDA', false);
            $this->db->from('preciarioconceptos AS PC');
            $this->db->where('PC.Preciarios_ID', $ID); 
            if ($CLAVE !== '') {
                $this->db->where("PC.Clave LIKE '%$CLAVE%'", null, false);
            }
            if ($DESCRIPCION !== '') {
                $this->db->where("PC.Descripcion LIKE '%$DESCRIPCION%'", null, false);
            }
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

    public function getCategoriasXPreciarioID($ID) {
        try {
            $this->db->select('PC.ID,CONCAT(PC.Clave," - ",PC.Descripcion) AS CATEGORIA', false);
            $this->db->from('preciariocategorias AS PC');
            $this->db->where('PC.Preciario_ID', $ID);
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

    public function getSubCategoriasXCategoriaIDXPreciarioID($ID, $IDC) {
        try {
            $this->db->select('PSC.ID,CONCAT(PSC.Clave," - ",PSC.Descripcion) AS SUBCATEGORIA', false);
            $this->db->from('preciariosubcategorias AS PSC');
            if (isset($ID) && $ID !== '') {
                $this->db->where('PSC.Preciario_ID', $ID);
            }
            if (isset($IDC) && $IDC !== '') {
                $this->db->where('PSC.PreciarioCategoria_ID', $IDC);
            }
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

    public function getSubSubCategoriasXSubCategoriaXCategoriaIDXPreciarioID($ID, $IDC, $IDSC) {
        try {
            $this->db->select('PSSC.ID,CONCAT(PSSC.Clave," - ",PSSC.Descripcion) AS SUBSUBCATEGORIA', false);
            $this->db->from('preciariosubsubcategoria AS PSSC');
            if (isset($ID) && $ID !== '') {
                $this->db->where('PSSC.Preciario_ID', $ID);
            }
            if (isset($IDC) && $IDC !== '') {
                $this->db->where('PSSC.PreciarioCategoria_ID', $IDC);
            }
            if (isset($IDC) && $IDC !== '') {
                $this->db->where('PSSC.PreciarioSubCategorias_ID', $IDSC);
            }
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

    public function getCategoriasByPreciarioID($ID) {
        try {
            $this->db->select('PC.ID, PC.Clave AS CLAVE, PC.Descripcion AS DESCRIPCION, '
                    . '(SELECT COUNT(*) FROM preciariosubcategorias AS PSC WHERE PSC.Preciario_ID = PC.Preciario_ID AND PSC.PreciarioCategoria_ID = PC.ID) AS NSUB', false);
            $this->db->from('preciariocategorias AS PC');
            $this->db->where('PC.Preciario_ID', $ID);
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

    public function getSubCategoriasByCategoriaIDPreciarioID($ID, $IDC) {
        try {
            $this->db->select("PSC.ID, PSC.Clave AS CLAVE, PSC.Descripcion AS DESCRIPCION, "
                    . "(SELECT COUNT(*) FROM preciariosubsubcategoria AS PSSC WHERE PSSC.Preciario_ID = PSC.Preciario_ID AND PSSC.PreciarioCategoria_ID = PSC.ID) AS NSUB,"
                    . "(SELECT COUNT(*) FROM preciarioconceptos AS PC "
                    . "WHERE PC.Preciarios_ID = PSC.Preciario_ID "
                    . "AND PC.PreciarioCategorias_ID = PSC.PreciarioCategoria_ID AND PC.PreciarioSubCategorias_ID = PSC.ID) AS NCON", false);
            $this->db->from('preciariosubcategorias AS PSC');
            $this->db->where('PSC.Preciario_ID', $ID);
            $this->db->where('PSC.PreciarioCategoria_ID', $IDC);
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

    public function getSubSubCategoriasBySubCategoriaIDCategoriaIDPreciarioID($ID, $IDC, $IDSC) {
        try {
            $this->db->select("PSSC.ID, PSSC.Clave AS CLAVE, PSSC.Descripcion AS DESCRIPCION, "
                    . "(SELECT COUNT(*) FROM preciarioconceptos AS PC "
                    . "WHERE PC.Preciarios_ID = $ID "
                    . "AND PC.PreciarioCategorias_ID = $IDC "
                    . "AND PC.PreciarioSubCategorias_ID = $IDSC "
                    . "AND PC.PreciarioSubSubCategoria_ID = PSSC.ID) AS NSUB,"
                    . "(SELECT COUNT(*) FROM preciarioconceptos AS PC "
                    . "WHERE PC.Preciarios_ID = $ID "
                    . "AND PC.PreciarioCategorias_ID = $IDC "
                    . "AND PC.PreciarioSubCategorias_ID = $IDSC "
                    . "AND PC.PreciarioSubSubCategoria_ID = PSSC.ID ) AS NCON", false);
            $this->db->from('preciariosubsubcategoria AS PSSC');
            $this->db->where('PSSC.Preciario_ID', $ID);
            $this->db->where('PSSC.PreciarioCategoria_ID', $IDC);
            $this->db->where('PSSC.PreciarioSubCategorias_ID', $IDSC);
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

    public function getConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID($ID, $IDC, $IDSC, $IDSSC) {
        try {
            $this->db->select("PC.ID, "
                    . "CONCAT('<span class=\"label label-danger\">',"
                    . "PC.Clave"
                    . ",'</span>')"
                    . " AS CLAVE, "
                    . "PC.Descripcion AS DESCRIPCION, PC.Unidad AS UNIDAD, "
                    . "CONCAT('<span class=\"label label-success\">',\"$\",FORMAT(PC.Costo,2),'</span>') AS COSTO, PC.Moneda AS MONEDA", false);
            $this->db->from('preciarioconceptos AS PC');
            if ($ID !== NULL && $ID !== '') {
                $this->db->where('PC.Preciarios_ID', $ID);
            }
            if ($IDC !== NULL && $IDC !== '') {
                $this->db->where('PC.PreciarioCategorias_ID', $IDC);
            }
            if ($IDSC !== NULL && $IDSC !== '') {
                $this->db->where('PC.PreciarioSubCategorias_ID', $IDSC);
            }
            if ($IDSSC !== NULL && $IDSSC !== '') {
                $this->db->where('PC.PreciarioSubSubCategoria_ID', $IDSSC);
            }
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

    public function getClientes() {
        try {
            $this->db->select('C.ID, C.Nombre AS CLIENTE', false);
            $this->db->from('Clientes AS C');
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
            $this->db->insert("preciarios", $array);
//            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarPreciarioConceptos($array) {
        try {
            $this->db->insert("preciarioconceptos", $array);
//            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarPreciarioCategoria($array) {
        try {
            $this->db->insert("preciariocategorias", $array);
//            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarPreciarioSubCategoria($array) {
        try {
            $this->db->insert("preciariosubcategorias", $array);
//            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarPreciarioSubSubCategoria($array) {
        try {
            $this->db->insert("preciariosubsubcategoria", $array);
//            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("preciarios", $DATA);
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->where('Preciario_ID', $ID);
            $this->db->delete("preciariosubsubcategoria");

            $this->db->where('Preciarios_ID', $ID);
            $this->db->delete("preciarioconceptos");

            $this->db->where('Preciario_ID', $ID);
            $this->db->delete("preciariosubcategorias");

            $this->db->where('Preciario_ID', $ID);
            $this->db->delete("preciariocategorias");

            $this->db->where('id', $ID);
            $this->db->delete("preciarios");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete("preciarioconceptos");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEditarConcepto($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("preciarioconceptos", $DATA);
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
