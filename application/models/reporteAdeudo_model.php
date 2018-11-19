<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class reporteAdeudo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getClientes($Cliente, $Estatus, $Region) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select("T.Cliente_ID IDCliente , C.Nombre AS Cliente "
                    . '', false);
            $this->db->from('trabajos T');
            $this->db->join('clientes C', 'ON T.Cliente_ID =  C.ID');
            $this->db->join('SUCURSALES S', 'S.ID = T.Sucursal_ID ');
            if ($Cliente[0] === '0') {

            } else {
                $this->db->where_in('T.Cliente_ID', $Cliente);
            }
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido', 'Entregado'));
            $this->db->where_in('T.EstatusTrabajo', $Estatus);
            $this->db->where('S.Region', $Region);
            $this->db->group_by('IDCliente');
            $this->db->group_by('C.Nombre');
            $this->db->order_by('C.Nombre', 'ASC');
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

    public function getSubtotal($Cliente, $Region, $Estatus) {
        try {
            $this->db->select("sum(T.Importe) AS Subtotal "
                    . '', false);
            $this->db->from('TRABAJOS T');
            $this->db->join('CLIENTES CT', 'CT.ID = T.Cliente_ID ');
            $this->db->join('SUCURSALES S', 'S.ID = T.Sucursal_ID ');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido', 'Entregado'));
            $this->db->where_in('T.ESTATUSTRABAJO', $Estatus);


            if ($Cliente[0] === '0') {

            } else {
                $this->db->where_in('T.Cliente_ID', $Cliente);
            }

            $this->db->where('S.Region', $Region);
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

    public function getEstatus($Cliente, $Region, $Estatus) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select("T.Cliente_ID AS IDCliente,
    CASE
    WHEN T.EstatusTrabajo =  'Pedido'
	THEN '1 PEDIDO'
    WHEN T.EstatusTrabajo =  'Presupuesto'
	THEN '2 PRESUPUESTO'
    WHEN T.EstatusTrabajo =  'Autorización'
	THEN '3 AUTORIZACIÓN'
    WHEN T.EstatusTrabajo =  'No Autorizado'
	THEN '4 NO AUTORIZADO'
    WHEN T.EstatusTrabajo =  'Ejecución'
	THEN '5 EJECUCIÓN'
    WHEN T.EstatusTrabajo =  'Finalizado'
	THEN '6 FINALIZADO'
    WHEN T.EstatusTrabajo =  'Facturado'
	THEN '7 FACTURADO'
    WHEN T.EstatusTrabajo =  'Pagado'
	THEN '8 PAGADO'
    ELSE 'CANCELADO'
    END
    AS ET  "
                    . '', false);
            $this->db->from('TRABAJOS T');
            $this->db->join('CLIENTES CT', 'CT.ID = T.Cliente_ID ');
            $this->db->join('SUCURSALES S', 'S.ID = T.Sucursal_ID ');
            $this->db->join('entregas EN', 'EN.ID = T.Entrega_ID ', 'left');
            $this->db->join('prefacturas pf', 'pf.ID = T.Prefactura_ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido', 'Entregado'));
            $this->db->where_in('T.ESTATUSTRABAJO', $Estatus);
            if ($Cliente[0] === '0') {

            } else {
                $this->db->where_in('T.Cliente_ID', $Cliente);
            }
            $this->db->where('S.Region', $Region);
            $this->db->group_by('ET');
            $this->db->order_by('CT.Nombre', 'ASC');
            $this->db->order_by('ET', 'ASC');
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

    public function getDatoseporteAdeudo($Cliente, $Region, $Estatus) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select("T.ID, T.Cliente_ID AS IDCliente,"
                    . "T.FolioCliente AS 'Folio', "
                    . "UPPER(CONCAT(S.CR,' - ',S.Nombre)) AS 'Sucursal',"
                    . "UPPER(S.Region) AS 'Region',"
                    . "T.FechaCreacion AS FechaFolio,"
                    . "T.Importe AS Subtotal,"
                    . "T.Importe * 0.16 AS IVA,"
                    . "T.Importe+( T.Importe * 0.16) AS Total,"
                    . "UPPER(ES.Descripcion) AS 'Especialidad',"
                    . "IFNULL(CC.Nombre,'') AS 'CentroCostos',"
                    . "UPPER(T.Observaciones) AS Observaciones,"
                    . "UPPER(T.TrabajoRequerido) AS TrabajoRequerido,"
                    . "UPPER(en.NoEntrega)  As 'NoEntrega',"
                    . "en.FechaCreacion  As 'FechaEntrega',"
                    . "pf.Referencia AS 'Factura',"
                    . "UPPER(pf.OrdenCompra) AS OrdenCompra, "
                    . "CASE
    WHEN T.EstatusTrabajo =  'Pedido'
	THEN '1 PEDIDO'
    WHEN T.EstatusTrabajo =  'Presupuesto'
	THEN '2 PRESUPUESTO'
    WHEN T.EstatusTrabajo =  'Autorización'
	THEN '3 AUTORIZACIÓN'
    WHEN T.EstatusTrabajo =  'No Autorizado'
	THEN '4 NO AUTORIZADO'
    WHEN T.EstatusTrabajo =  'Ejecución'
	THEN '5 EJECUCIÓN'
    WHEN T.EstatusTrabajo =  'Finalizado'
	THEN '6 FINALIZADO'
    WHEN T.EstatusTrabajo =  'Facturado'
	THEN '7 FACTURADO'
    WHEN T.EstatusTrabajo =  'Pagado'
	THEN '8 PAGADO'
    ELSE 'CANCELADO'
    END
    AS ET "
                    . '', false);
            $this->db->from('TRABAJOS T');
            $this->db->join('CLIENTES CT', 'CT.ID = T.Cliente_ID ');
            $this->db->join('SUCURSALES S', 'S.ID = T.Sucursal_ID ');
            $this->db->join('ESPECIALIDADES ES', 'ES.ID = T.Especialidad_ID ', 'left');
            $this->db->join('centrocostos CC', 'CC.ID = T.CentroCostos_ID', 'left');
            $this->db->join('entregas EN', 'EN.ID = T.Entrega_ID ', 'left');
            $this->db->join('prefacturas pf', 'pf.ID = T.Prefactura_ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido', 'Entregado'));
            $this->db->where_in('T.ESTATUSTRABAJO', $Estatus);
            if ($Cliente[0] === '0') {

            } else {
                $this->db->where_in('T.Cliente_ID', $Cliente);
            }
            $this->db->where('S.Region', $Region);
            $this->db->order_by('CT.Nombre', 'ASC');
            $this->db->order_by('ET', 'ASC');
            $this->db->order_by('Factura', 'ASC');
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

    public function getDatoseporteAdeudoExcel($Cliente, $Region, $Estatus) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select("T.ID, T.Cliente_ID AS IDCliente,"
                    . "T.FolioCliente AS 'Folio', "
                    . "CT.Nombre AS 'NombreCliente' , "
                    . "UPPER(CONCAT(S.CR,' - ',S.Nombre)) AS 'Sucursal',"
                    . "UPPER(S.Region) AS 'Region',"
                    . "T.FechaCreacion AS FechaFolio,"
                    . "T.Importe AS Subtotal,"
                    . "T.Importe * 0.16 AS IVA,"
                    . "T.Importe+( T.Importe * 0.16) AS Total,"
                    . "UPPER(ES.Descripcion) AS 'Especialidad',"
                    . "IFNULL(CC.Nombre,'') AS 'CentroCostos',"
                    . "UPPER(T.Observaciones) AS Observaciones,"
                    . "UPPER(T.TrabajoRequerido) AS TrabajoRequerido,"
                    . "UPPER(en.NoEntrega)  As 'NoEntrega',"
                    . "en.FechaCreacion  As 'FechaEntrega',"
                    . "pf.Referencia AS 'Factura',"
                    . "UPPER(pf.OrdenCompra) AS OrdenCompra, "
                    . "CASE
    WHEN T.EstatusTrabajo =  'Pedido'
	THEN '1 PEDIDO'
    WHEN T.EstatusTrabajo =  'Presupuesto'
	THEN '2 PRESUPUESTO'
    WHEN T.EstatusTrabajo =  'Autorización'
	THEN '3 AUTORIZACIÓN'
    WHEN T.EstatusTrabajo =  'No Autorizado'
	THEN '4 NO AUTORIZADO'
    WHEN T.EstatusTrabajo =  'Ejecución'
	THEN '5 EJECUCIÓN'
    WHEN T.EstatusTrabajo =  'Finalizado'
	THEN '6 FINALIZADO'
    WHEN T.EstatusTrabajo =  'Facturado'
	THEN '7 FACTURADO'
    WHEN T.EstatusTrabajo =  'Pagado'
	THEN '8 PAGADO'
    ELSE 'CANCELADO'
    END
    AS ET "
                    . '', false);
            $this->db->from('TRABAJOS T');
            $this->db->join('CLIENTES CT', 'CT.ID = T.Cliente_ID ');
            $this->db->join('SUCURSALES S', 'S.ID = T.Sucursal_ID ');
            $this->db->join('ESPECIALIDADES ES', 'ES.ID = T.Especialidad_ID ', 'left');
            $this->db->join('centrocostos CC', 'CC.ID = T.CentroCostos_ID', 'left');
            $this->db->join('entregas EN', 'EN.ID = T.Entrega_ID ', 'left');
            $this->db->join('prefacturas pf', 'pf.ID = T.Prefactura_ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido', 'Entregado'));
            $this->db->where_in('T.ESTATUSTRABAJO', $Estatus);
            if ($Cliente[0] === '0') {

            } else {
                $this->db->where_in('T.Cliente_ID', $Cliente);
            }
            $this->db->where('S.Region', $Region);
            $this->db->order_by('CT.Nombre', 'ASC');
            $this->db->order_by('ET', 'ASC');
            $this->db->order_by('Factura', 'ASC');
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
