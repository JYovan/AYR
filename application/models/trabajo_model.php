<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class trabajo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
        try {
            $this->db->select("T.ID, T.Movimiento,"
                    . "(CASE WHEN  T.FolioCliente IS NULL OR T.FolioCliente =' ' THEN ' -- ' ELSE T.FolioCliente  END) AS 'Folio', "
                    . "(CASE WHEN  T.Estatus ='Concluido' THEN CONCAT('<span class=\'label label-success\'>','CONCLUIDO','</span>') "
                    . "WHEN  T.Estatus ='Borrador' THEN CONCAT('<span class=\'label label-default\'>','BORRADOR','</span>')"
                    . "ELSE CONCAT('<span class=\'label label-danger\'>','Cancelado','</span>') END) AS Estatus ,"
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "(CASE WHEN  T.Atendido ='Si' THEN CONCAT('<span class=\'label label-success\'>','SI','</span>') ELSE CONCAT('<span class=\'label label-danger\'>','NO','</span>') END) AS Atendido ,"
                    . "(CASE WHEN  T.Adjunto IS NULL THEN CONCAT('<span class=\'label label-danger\'>','NO','</span>') ELSE CONCAT('<span class=\'label label-success\'>','SI','</span>') END) AS Adjunto ,"
                    . "Ct.Nombre as 'Cliente', "
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "CONCAT('<strong>$',FORMAT(T.Importe,2),'</strong>') AS Importe,"
                    . "(CASE WHEN  T.Clasificacion IS NULL THEN ' -- ' ELSE T.Clasificacion  END) AS 'Clasificación', "
                    . "S.Region ,"
                    . "(CASE WHEN  Cd.Nombre IS NULL THEN ' -- ' ELSE Cd.Nombre  END) AS 'Cuadrilla', "
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "LEFT JOIN CUADRILLAS Cd on Cd.ID = T.Cuadrilla_ID  "
                    . "INNER JOIN USUARIOs U ON U.ID = T.Usuario_ID WHERE T.ESTATUS in ('Borrador','Concluido') ", false);

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

    public function getTrabajoDetalleByID($IDX) {
        try {
            $this->db->select('TD.ID, CONCAT("<span class=\'label label-danger\'>",PC.Clave,"</span>") AS CLAVE, TD.IntExt AS "Int/Ext" , '
                    . 'PC.Descripcion AS Descripcion, TD.Cantidad, TD.Unidad, '
                    . 'CONCAT("$",FORMAT(TD.Precio,2)) AS Precio, CONCAT("<span class=\'label label-success\'>$",FORMAT(TD.Importe,2),"</span>") AS Importe, TD.Moneda,'
                    . 'CONCAT("<span class=\"fa fa-cog 2x\" onclick=\"getGeneradorXConceptoID(TD.ID)\"></span>") AS Generador, '
                    . 'CONCAT("<span class=\"fa fa-camera 2x\" onclick=\"getFotosXConceptoID(TD.ID)\"></span>") AS Fotos, '
                    . 'CONCAT("<span class=\"fa fa-map 2x\" onclick=\"getCroquisXConceptoID(TD.ID)\"></span>") AS Croquis, '
                    . 'CONCAT("<span class=\"fa fa-paperclip 2x\" onclick=\"getAnexosXConceptoID(TD.ID)\"></span>") AS Anexos, '
                    . 'CONCAT("<span class=\"fa fa-minus 2x\" onclick=\"onEliminarDetalle(TD.ID)\"></span>") AS Eliminar', false);
            $this->db->from("trabajosdetalle AS TD");
            $this->db->join("preciarioconceptos AS PC", "PC.ID = TD.PreciarioConcepto_ID");
            $this->db->where("TD.Trabajo_ID", $IDX);
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

    public function getTrabajoFotosDetalleByID($IDX) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("trabajodetallefotos AS TDF");
            $this->db->where("TDF.IdTrabajoDetalle", $IDX);
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

    public function getTrabajoCroquisDetalleByID($IDX) {
        try {
            $this->db->select('TDC.*', false);
            $this->db->from("trabajodetallecroquis AS TDC");
            $this->db->where("TDC.IdTrabajoDetalle", $IDX);
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

    public function getTrabajoAnexosDetalleByID($IDX) {
        try {
            $this->db->select('TDA.*', false);
            $this->db->from("trabajodetalleanexos AS TDA");
            $this->db->where("TDA.IdTrabajoDetalle", $IDX);
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

    public function onAgregarDetalle($array) {
        try {
            $this->db->insert("trabajosdetalle", $array);
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

    public function onAgregarDetalleGenerador($array) {
        try {
            $this->db->insert("generadortrabajosdetalle", $array);
            //      print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleFotos($array) {
        try {
            $this->db->insert("trabajodetallefotos", $array);
            //     print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalleFoto($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetallefotos", $DATA);
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleAnexos($array) {
        try {
            $this->db->insert("trabajodetalleanexos", $array);
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

    public function onModificarDetalleAnexo($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetalleanexos", $DATA);
            //      print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleCroquis($array) {
        try {
            $this->db->insert("trabajodetallecroquis", $array);
            //        print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalleCroquis($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetallecroquis", $DATA);
            //      print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajos", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Cancelado');
            $this->db->where('ID', $ID);
            $this->db->update("trabajos");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoXConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetallefotos');
//            print $str = $this->db->last_query();
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

    public function getConceptosXPreciarioID($ID) {
        try {

            $this->db->select('PC.ID,CONCAT("<span class=\"label label-danger\">",PC.Clave,"</span>") AS Clave, PC.Descripcion AS "Descripción", PC.Unidad AS Unidad, CONCAT("<span class=\"label label-success\">$",FORMAT(PC.Costo,2),"</span>") AS Costo, PC.Moneda AS Moneda', false);
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
            $this->db->select('PC.ID, PC.Clave, PC.Descripcion, PC.Unidad, PC.Costo, FORMAT(PC.Costo,2) AS Precio, PC.Moneda, PC.PreciarioSubSubCategoria_ID, PC.PreciarioSubCategorias_ID, PC.PreciarioCategorias_ID, PC.Preciarios_ID', false);
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

    /* Reportes */

    public function getFin49ByID($ID) {
        try {
            $this->db->select('T.Movimiento,T.FechaCreacion,T.FolioCliente,T.ImpactoEnPlazo,T.DiasImpacto,T.CausaTrabajo,T.ClaveOrigenTrabajo,
                                T.EspecificaOrigenTrabajo,T.DescripcionOrigenTrabajo,T.DescripcionRiesgoTrabajo,T.DescripcionAlcanceTrabajo,T.Importe,
                                CTE.Nombre AS NombreCliente,CTE.NombreCorto,S.CR,S.Nombre AS NombreSucursal,S.TipoConcepto,S.TipoObra,S.Contrato,
                                S.FechaInicio,S.FechaFin, E.Nombre AS Empresa, ES.Nombre AS EmpresaSupervisora,CTE.RutaLogo
                                FROM TRABAJOS T
                                INNER JOIN clientes CTE ON CTE.ID =  T.Cliente_ID 
                                INNER JOIN sucursales S ON S.ID  = T.Sucursal_ID
                                LEFT JOIN empresassupervisoras ES ON ES.ID = S.EmpresaSupervisora_ID
                                LEFT JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus','Borrador', 'Concluido');
            $this->db->where('T.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
     //   print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    public function getResumenPartidas($ID) {
        try {
            $this->db->select('T.FechaCreacion,T.FolioCliente,T.Importe,T.TrabajoSolicitado,
                                CTE.Nombre AS Cliente,S.CR,S.Nombre AS Sucursal, 
                                E.Nombre AS Empresa,E.RutaLogo AS LogoEmpresa,CONCAT(E.ContactoNombre," ",E.ContactoApellidos) AS ContactoEmpresa,
                                CONCAT(S.FirmaManttoNombres1," ",S.FirmaManttoApellidos1) AS FirmaBanco,                                
                                CTE.RutaLogo AS LogoCliente,
                                TD.IntExt,TD.Importe AS ImporteRenglon, PCAT.Descripcion AS Categoria
                                FROM TRABAJOS T
                                INNER JOIN clientes CTE ON CTE.ID =  T.Cliente_ID 
                                INNER JOIN sucursales S ON S.ID  = T.Sucursal_ID
                                INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID 
                                INNER JOIN preciarios PRE ON PRE.ID = T.Preciario_ID
                                INNER JOIN preciarioconceptos PC ON PC.ID = TD.PreciarioConcepto_ID
                                INNER JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
                                INNER JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus','Borrador', 'Concluido');
            $this->db->where('T.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
     //   print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
