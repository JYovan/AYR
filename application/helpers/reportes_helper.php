<?php

class PDFC extends FPDF {

    function Footer() {
        /* Leyenda */
        $this->SetY(232);
        $this->SetX(10);
        $this->SetFont('Arial', '', 6.5);
        $this->MultiCell(190, 3, utf8_decode("EL IMPORTE DE ESTE PRESUPUESTO NO INCLUYE 16% IVA. VIGENCIA VÁLIDA POR 30 DÍAS A PARTIR DE LA FECHA DE GENERACIÓN DEL PRESUPUESTO SIN OTRO PARTICULAR DE MOMENTO Y EN ESPERA DE VERNOS FAVORECIDOS CON SU PREFERENCIA, QUEDO A SUS APRECIABLES ORDENES."), 0, 'C');
        /* Firma */
        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 15);
        $this->SetX(73);
        $this->SetFont('Arial', 'B', 7.5);
        $this->cell(70, 5, utf8_decode("Ing. Victor Ayala Ruiz"), 'T', 0, 'C');
        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 3);
        $this->SetX(73);
        $this->SetFont('Arial', '', 7.5);
        $this->cell(70, 5, utf8_decode("A & R Construcciones Sa de Cv"), 0, 0, 'C');
        /* Barra Footer */
        $CurrentY = $this->GetY();
        $this->Image(base_url() . 'img/barra_Presupuesto.png', 5, $CurrentY + 2, 210, 6);
        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 4);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 7);
        $this->MultiCell(60, 3, utf8_decode("
Justo Sierra No. 2150
Col. Americana
CP. 44600
Guadalajara, Jalisco, MÉXICO"), 0, 'L');
        $this->SetY($CurrentY + 6);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("victor.ayala@ayr.mx"), 0, 0, 'L');
    }

}

class FotosFPDF extends FPDF {

// Page header
    function Header() {
        // Logo
        $this->Image($this->getLogo(), 5, 5, 64);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 9);
        // Título
        $this->SetY(5);
        // Movernos a la derecha
        $this->Cell(75);
        $this->Cell(125, 25, utf8_decode("REPORTE FOTOGRÁFICO"), 0, 0, 'C');
        $this->SetFont('Arial', 'B', 8);
        $this->SetY(1);
        $this->SetX(225);
        $this->Cell(50, 15, utf8_decode("Dirección de Administración de"), 0, 0, 'R');
        $this->Ln(5);
        $this->SetY(4);
        $this->SetX(225.5);
        $this->Cell(50, 15, utf8_decode("InmueblesGestión de Calidad"), 0, 0, 'R');
        $this->Ln(5);
        $this->SetY(7);
        $this->SetX(225);
        $this->Cell(50, 15, utf8_decode("InmueblesSubdirección de Inmovilizado"), 0, 0, 'R');
        /* CUERPO */
        $this->SetY(25);
        $this->SetLineWidth(0.4);
        /* INICIA  EN LA ESQUINA DE EMPRESA */
        $this->Rect(164, 25, 110, 22);
        /* INICIA EN LA ESQUINA DE OBRA */
        $this->Rect(5, 32, 269, 15);
        /* INICIA EN LA ESQUINA DE CLAVE */
        $this->Rect(5, 49.5, 269, 19);
        /* INICIA EN LA ESQUINA CONTENEDOR PRINCIPAL */
        $this->Rect(5, 71, 269, 105);
        /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
        $this->Line(45, 32, 45, 47);
        /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
        $this->Line(214, 25, 214, 47);
        /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
        $this->Line(5, 38, 274, 38);
        /* LINEA VERTICAL DELANTE DE CLAVE */
        $this->Line(45, 49.5, 45, 68);
        /* LINEA VERTICAL  DE PARTIDA */
        $this->Line(90, 49.5, 90, 68);
        /* LINEA HORIZONTAL DEBAJO DE CLAVE, PARTIDA Y CONCEPTO */
        $this->Line(5, 56, 274, 56);
        /* TITULOS */
        $this->SetFont('Arial', 'B', 8);
        $this->SetY(33);
        $this->SetX(20);
        $this->Cell(55, 5, "OBRA: ", 0, 1);
        $this->SetY(39);
        $this->SetX(15);
        $this->Cell(55, 5, utf8_decode("UBICACIÓN: "), 0, 1);
        $this->SetY(26);
        $this->SetX(163);
        $this->Cell(55, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
        $this->SetY(33);
        $this->SetX(163);
        $this->Cell(55, 5, utf8_decode("UNIDAD "), 0, 1, 'C');
        $this->SetY(33);
        $this->SetX(216);
        $this->Cell(55, 5, utf8_decode("HOJA "), 0, 1, 'C');
        $this->SetY(51);
        $this->SetX(15);
        $this->Cell(20, 5, utf8_decode("CLAVE "), 0, 1, 'C');
        $this->SetY(51);
        $this->SetX(60);
        $this->Cell(15, 5, utf8_decode("PARTIDA "), 0, 1, 'C');
        $this->SetY(51);
        $this->SetX(164);
        $this->Cell(15, 5, utf8_decode("CONCEPTO"), 0, 1, 'C');
        /* DATOS */
        $this->SetY(33);
        $this->SetX(46);
        $this->SetFont('Arial', '', 7);
        $this->Cell(115, 5, utf8_decode($this->getCR() . ' - ' . $this->getSucursal()), 0, 1);
        $this->SetY(26);
        $this->SetX(214);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(60, 5, utf8_decode($this->getEmpresa()), 0, 1, 'C');
        $this->SetY(38.5);
        $this->SetX(46);
        $this->SetFont('Arial', '', 7);
        $this->MultiCell(115, 4, utf8_decode($this->getDireccion()), 0, 1);
        $this->SetY(40);
        $this->SetX(164);
        $this->SetFont('Arial', '', 8);
        $this->Cell(50, 5, utf8_decode($this->getUnidad()), 0, 1, 'C');
        $this->SetY(40);
        $this->SetX(219);
        $this->Cell(0, 5, $this->PageNo() . ' DE {nb}', 0, 0, 'C');
        $this->SetY(58);
        $this->SetX(5);
        $this->Cell(40, 5, utf8_decode($this->getClave()), 0, 1, 'C');
        $this->SetY(58);
        $this->SetX(45);
        $this->MultiCell(45, 5, utf8_decode($this->getCategoria()), 0, 'C');
        $this->SetY(56.5);
        $this->SetX(90);
        $this->SetFont('Arial', '', 5.5);
        $this->MultiCell(184, 1.9, utf8_decode($this->getConcepto()), 0, 'J');
        /* DETALLE GENERADOR */
        /* ENCIERRA LA PALABRA croquis o anexo */
        $this->SetFont('Arial', 'B', 8);
        $this->Rect(5, 71, 40, 6);
        $this->SetY(71);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("FOTOS "), 0, 1, 'L');
        $this->Ln(20);
    }

// Page footer
    function Footer() {
        /* FIRMAS */
        /* ELABORÓ */
        $this->SetFont('Arial', '', 8);
        $this->SetY(183);
        $this->SetX(5);
        $this->Cell(80, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');
        $this->SetY(203);
        $this->SetX(5);
        $this->Cell(80, 5, utf8_decode($this->getFirma1()), 'T', 1, 'C');
        /* REVISÓ */
        $this->SetFont('Arial', '', 8);
        $this->SetY(183);
        $this->SetX(100);
        $this->Cell(80, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
        /* LINEA HORIZONTAL REVISÓ */
        $this->SetY(203);
        $this->SetX(100);
        $this->Cell(80, 5, utf8_decode($this->getFirma2()), 'T', 1, 'C');
        /* AUTORIZO */
        $this->SetFont('Arial', '', 8);
        $this->SetY(183);
        $this->SetX(195);
        $this->Cell(80, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
        /* LINEA HORIZONTAL AUTORIZÓ */
        $this->SetY(203);
        $this->SetX(195);
        $this->Cell(80, 5, utf8_decode($this->getFirma3()), 'T', 1, 'C');
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
    }

    /*  STTER AND GETTER */

    public $Logo = '';
    public $Empresa = '';
    public $Obra = '';
    public $Direccion = '';
    public $Cr = '';
    public $Sucursal = '';
    public $Ubicacion = '';
    public $Unidad = '';
    public $Clave = '';
    public $Partida = '';
    public $Categoria = '';
    public $Concepto = '';
    public $Firma1 = '';
    public $Firma2 = '';
    public $Firma3 = '';

    public function setFirma1($Firma1) {
        $this->Firma1 = $Firma1;
    }

    public function getFirma1() {
        return $this->Firma1;
    }

    public function setFirma2($Firma2) {
        $this->Firma2 = $Firma2;
    }

    public function getFirma2() {
        return $this->Firma2;
    }

    public function setFirma3($Firma3) {
        $this->Firma3 = $Firma3;
    }

    public function getFirma3() {
        return $this->Firma3;
    }

    public function setLogo($Logo) {
        $this->Logo = $Logo;
    }

    public function getLogo() {
        return $this->Logo;
    }

    public function setDireccion($Direccion) {
        $this->Direccion = $Direccion;
    }

    public function getDireccion() {
        return $this->Direccion;
    }

    public function setObra($Obra) {
        $this->Obra = $Obra;
    }

    public function getObra() {
        return $this->Obra;
    }

    public function setEmpresa($Empresa) {
        $this->Empresa = $Empresa;
    }

    public function getEmpresa() {
        return $this->Empresa;
    }

    public function setCr($Cr) {
        $this->Cr = $Cr;
    }

    public function getCr() {
        return $this->Cr;
    }

    public function setSucursal($Sucursal) {
        $this->Sucursal = $Sucursal;
    }

    public function getSucursal() {
        return $this->Sucursal;
    }

    public function setUbicacion($Ubicacion) {
        $this->Ubicacion = $Ubicacion;
    }

    public function getUbicacion() {
        return $this->Ubicacion;
    }

    public function setUnidad($Unidad) {
        $this->Unidad = $Unidad;
    }

    public function getUnidad() {
        return $this->Unidad;
    }

    public function setClave($Clave) {
        $this->Clave = $Clave;
    }

    public function getClave() {
        return $this->Clave;
    }

    public function setPartida($Partida) {
        $this->Partida = $Partida;
    }

    public function getPartida() {
        return $this->Partida;
    }

    public function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }

    public function getCategoria() {
        return $this->Categoria;
    }

    public function setConcepto($Concepto) {
        $this->Concepto = $Concepto;
    }

    public function getConcepto() {
        return $this->Concepto;
    }

}

class PDFFin49 extends FPDF {

    function Footer() {
        /* PIE DE PAGINA */
        $this->SetFont('Arial', 'B', 7);
        $this->SetY(270);
        $this->SetX(5);
        $this->Cell(92, 4, utf8_decode("INMUEBLES: Actitud, Eficiecia Y Calidad A Tu Servicio"), 1, 1, 'L');
        $this->SetY(270);
        $this->SetX(97);
        $this->SetFillColor(169, 244, 251);
        $this->Cell(23, 4, utf8_decode("Versión 1"), 1, 1, 'C', true);
        $this->SetY(270);
        $this->SetX(120);
        $this->Cell(90, 4, utf8_decode("Pag. " . $this->PageNo() . '     '), 1, 1, 'R');
    }

}

class FotosFPDLA extends FPDF {

// Page header
    function Header() {
        $this->SetY(0);
        $this->SetX(0);
        $this->SetFillColor(39, 79, 117);
        $this->Cell(279, 35, '', 1, 0, 'C', true);
        // Logo
        $this->Image(base_url() . 'img/AYR_reportes.png', 5, 3, 45);
        // Título
        $this->SetFont('Arial', 'B', 15);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(5);
        $this->SetX(185);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'R');
        $this->SetY(10);
        $this->SetX(185);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(90, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'R');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(15);
        $this->SetX(145);
        $this->Cell(130, 4, 'DIRECCION: ' . utf8_decode($this->getDireccionL()), 0, 1, 'R');
        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(122, 122, 122);
        $this->SetY(45);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("Estado Inicial"), 0, 1, 'L');
        $this->Ln(20);
    }

// Page footer
    function Footer() {
        $this->SetTextColor(122, 122, 122);
        $this->SetFont('Arial', 'B', 13);
        $this->SetY(210);
        $this->SetX(5);
        $this->Cell(180, 5, utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 1, 'L');
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(205);
        // Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
        $this->SetY(-15);
    }

    /*  STTER AND GETTER */

    public $EmpresaL = '';
    public $CrL = '';
    public $SucursalL = '';
    public $ConceptoL = '';
    public $ClienteL = '';
    public $DireccionL = '';

    public function setDireccionL($DireccionL) {
        $this->DireccionL = $DireccionL;
    }

    public function getDireccionL() {
        return $this->DireccionL;
    }

    public function setClienteL($ClienteL) {
        $this->ClienteL = $ClienteL;
    }

    public function getClienteL() {
        return $this->ClienteL;
    }

    public function setEmpresaL($EmpresaL) {
        $this->EmpresaL = $EmpresaL;
    }

    public function getEmpresaL() {
        return $this->EmpresaL;
    }

    public function setCrL($CrL) {
        $this->CrL = $CrL;
    }

    public function getCrL() {
        return $this->CrL;
    }

    public function setSucursalL($SucursalL) {
        $this->SucursalL = $SucursalL;
    }

    public function getSucursalL() {
        return $this->SucursalL;
    }

    public function setConceptoL($ConceptoL) {
        $this->ConceptoL = $ConceptoL;
    }

    public function getConceptoL() {
        return $this->ConceptoL;
    }

}

class FotosFPDLD extends FPDF {

// Page header
    function Header() {
        $this->SetY(0);
        $this->SetX(0);
        $this->SetFillColor(39, 79, 117);
        $this->Cell(279, 35, '', 1, 0, 'C', true);
        // Logo
        $this->Image(base_url() . 'img/AYR_reportes.png', 5, 3, 45);
        // Título
        $this->SetFont('Arial', 'B', 15);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(5);
        $this->SetX(185);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'R');
        $this->SetY(10);
        $this->SetX(185);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(90, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'R');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(15);
        $this->SetX(145);
        $this->Cell(130, 4, 'DIRECCION: ' . utf8_decode($this->getDireccionL()), 0, 1, 'R');
        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(122, 122, 122);
        $this->SetY(45);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("Estado Final "), 0, 1, 'L');
        $this->Ln(20);
    }

// Page footer
    function Footer() {
        $this->SetTextColor(122, 122, 122);
        $this->SetFont('Arial', 'B', 13);
        $this->SetY(210);
        $this->SetX(5);
        $this->Cell(180, 5, utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 1, 'L');
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(205);
        // Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
        $this->SetY(-15);
    }

    /*  STTER AND GETTER */

    public $EmpresaL = '';
    public $CrL = '';
    public $SucursalL = '';
    public $ConceptoL = '';
    public $ClienteL = '';
    public $DireccionL = '';

    public function setDireccionL($DireccionL) {
        $this->DireccionL = $DireccionL;
    }

    public function getDireccionL() {
        return $this->DireccionL;
    }

    public function setClienteL($ClienteL) {
        $this->ClienteL = $ClienteL;
    }

    public function getClienteL() {
        return $this->ClienteL;
    }

    public function setEmpresaL($EmpresaL) {
        $this->EmpresaL = $EmpresaL;
    }

    public function getEmpresaL() {
        return $this->EmpresaL;
    }

    public function setCrL($CrL) {
        $this->CrL = $CrL;
    }

    public function getCrL() {
        return $this->CrL;
    }

    public function setSucursalL($SucursalL) {
        $this->SucursalL = $SucursalL;
    }

    public function getSucursalL() {
        return $this->SucursalL;
    }

    public function setConceptoL($ConceptoL) {
        $this->ConceptoL = $ConceptoL;
    }

    public function getConceptoL() {
        return $this->ConceptoL;
    }

}

class Excel extends PHPExcel {

    public function __construct() {
        parent::__construct();
    }

}

class PDFGEN extends FPDF {

    function Footer() {
        /* FIRMAS */
        /* ELABORÓ */
        $this->SetFont('Arial', '', 8);
        $this->SetY(183);
        $this->SetX(5);
        $this->Cell(80, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');
        $this->SetY(203);
        $this->SetX(5);
        $this->Cell(80, 5, utf8_decode($this->getFirma1()), 'T', 1, 'C');
        /* REVISÓ */
        $this->SetFont('Arial', '', 8);
        $this->SetY(183);
        $this->SetX(100);
        $this->Cell(80, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
        /* LINEA HORIZONTAL REVISÓ */
        $this->SetY(203);
        $this->SetX(100);
        $this->Cell(80, 5, utf8_decode($this->getFirma2()), 'T', 1, 'C');
        /* AUTORIZO */
        $this->SetFont('Arial', '', 8);
        $this->SetY(183);
        $this->SetX(195);
        $this->Cell(80, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
        /* LINEA HORIZONTAL AUTORIZÓ */
        $this->SetY(203);
        $this->SetX(195);
        $this->Cell(80, 5, utf8_decode($this->getFirma3()), 'T', 1, 'C');
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
    }

    public $Firma1 = '';
    public $Firma2 = '';
    public $Firma3 = '';

    public function setFirma1($Firma1) {
        $this->Firma1 = $Firma1;
    }

    public function getFirma1() {
        return $this->Firma1;
    }

    public function setFirma2($Firma2) {
        $this->Firma2 = $Firma2;
    }

    public function getFirma2() {
        return $this->Firma2;
    }

    public function setFirma3($Firma3) {
        $this->Firma3 = $Firma3;
    }

    public function getFirma3() {
        return $this->Firma3;
    }

}

class FotosFPDLC extends FPDF {

// Page header
    function Header() {
        $this->SetY(0);
        $this->SetX(0);
        $this->SetFillColor(39, 79, 117);
        $this->Cell(279, 30, '', 1, 0, 'C', true);
        // Logo
        $this->Image(base_url() . 'img/AYR_reportes.png', 5, 3, 35);
        // Título
        $this->SetFont('Arial', 'B', 15);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(5);
        $this->SetX(185);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'R');
        $this->SetY(10);
        $this->SetX(185);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(90, 5, 'PARA: ' . utf8_decode($this->getClienteL()), 0, 1, 'R');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(10);
        $this->SetX(70);
        $this->SetFont('Arial', 'I', 7.5);
        $this->MultiCell(150, 3, strtoupper(utf8_decode($this->getConceptoL())), 0, 'J');
        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(122, 122, 122);
        $this->SetY(33);
        $this->SetX(5);
        $this->Cell(35, 5, utf8_decode("Estado Inicial "), 0, 1, 'L');
        $this->SetY(33);
        $this->SetX(145);
        $this->Cell(35, 5, utf8_decode("Estado Final "), 0, 1, 'L');
        $this->Line(140, 40, 140, 200);
    }

// Page footer
    function Footer() {
        $this->SetTextColor(122, 122, 122);
        $this->SetFont('Arial', 'B', 15);
        $this->SetY(210);
        $this->SetX(5);
        $this->Cell(180, 5, utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 1, 'L');
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(208);
        // Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
        $this->SetY(-15);
    }

    /*  STTER AND GETTER */

    public $EmpresaL = '';
    public $CrL = '';
    public $SucursalL = '';
    public $ConceptoL = '';
    public $ClienteL = '';

    public function setClienteL($ClienteL) {
        $this->ClienteL = $ClienteL;
    }

    public function getClienteL() {
        return $this->ClienteL;
    }

    public function setEmpresaL($EmpresaL) {
        $this->EmpresaL = $EmpresaL;
    }

    public function getEmpresaL() {
        return $this->EmpresaL;
    }

    public function setCrL($CrL) {
        $this->CrL = $CrL;
    }

    public function getCrL() {
        return $this->CrL;
    }

    public function setSucursalL($SucursalL) {
        $this->SucursalL = $SucursalL;
    }

    public function getSucursalL() {
        return $this->SucursalL;
    }

    public function setConceptoL($ConceptoL) {
        $this->ConceptoL = $ConceptoL;
    }

    public function getConceptoL() {
        return $this->ConceptoL;
    }

}

class FotosFPDLAP extends FPDF {

// Page header
    function Header() {
        $this->SetY(0);
        $this->SetX(0);
        $this->SetFillColor(210, 71, 38);
        $this->Cell(279, 35, '', 1, 0, 'C', true);
        // Logo
        $this->Image(base_url() . 'uploads/Clientes/4/PRINCIPLE.png', 225, 15, 50);
        // Título
        $this->SetFont('Arial', 'B', 25);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(20);
        $this->SetX(8);
        $this->Cell(80, 10, utf8_decode("FELL PROGRAM"), 0, 0, 'L');
        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(122, 122, 122);
        $this->SetY(45);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("Estado Inicial"), 0, 1, 'L');
        $this->Ln(20);
    }

// Page footer
    function Footer() {
        $this->Image(base_url() . 'img/watermark2.png', 253, 202, 13);
        $this->SetTextColor(122, 122, 122);
        $this->SetFont('Arial', 'B', 13);
        $this->SetY(210);
        $this->SetX(5);
        $this->Cell(180, 5, 'ID -' . utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 1, 'L');
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(210);
        // Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
        $this->SetY(-15);
    }

    /*  STTER AND GETTER */

    public $EmpresaL = '';
    public $CrL = '';
    public $SucursalL = '';
    public $ConceptoL = '';
    public $ClienteL = '';
    public $DireccionL = '';

    public function setDireccionL($DireccionL) {
        $this->DireccionL = $DireccionL;
    }

    public function getDireccionL() {
        return $this->DireccionL;
    }

    public function setClienteL($ClienteL) {
        $this->ClienteL = $ClienteL;
    }

    public function getClienteL() {
        return $this->ClienteL;
    }

    public function setEmpresaL($EmpresaL) {
        $this->EmpresaL = $EmpresaL;
    }

    public function getEmpresaL() {
        return $this->EmpresaL;
    }

    public function setCrL($CrL) {
        $this->CrL = $CrL;
    }

    public function getCrL() {
        return $this->CrL;
    }

    public function setSucursalL($SucursalL) {
        $this->SucursalL = $SucursalL;
    }

    public function getSucursalL() {
        return $this->SucursalL;
    }

    public function setConceptoL($ConceptoL) {
        $this->ConceptoL = $ConceptoL;
    }

    public function getConceptoL() {
        return $this->ConceptoL;
    }

}

class FotosFPDLDP extends FPDF {

// Page header
    function Header() {
        $this->SetY(0);
        $this->SetX(0);
        $this->SetFillColor(210, 71, 38);
        $this->Cell(279, 35, '', 1, 0, 'C', true);
        // Logo
        $this->Image(base_url() . 'uploads/Clientes/4/PRINCIPLE.png', 225, 15, 50);
        // Título
        $this->SetFont('Arial', 'B', 25);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(20);
        $this->SetX(8);
        $this->Cell(80, 10, utf8_decode("FELL PROGRAM"), 0, 0, 'L');
        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(122, 122, 122);
        $this->SetY(45);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("Estado Final"), 0, 1, 'L');
        $this->Ln(20);
    }

// Page footer
    function Footer() {
        $this->Image(base_url() . 'img/watermark2.png', 253, 202, 13);
        $this->SetTextColor(122, 122, 122);
        $this->SetFont('Arial', 'B', 13);
        $this->SetY(210);
        $this->SetX(5);
        $this->Cell(180, 5, 'ID -' . utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 1, 'L');
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(210);
        // Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
        $this->SetY(-15);
    }

    /*  STTER AND GETTER */

    public $EmpresaL = '';
    public $CrL = '';
    public $SucursalL = '';
    public $ConceptoL = '';
    public $ClienteL = '';
    public $DireccionL = '';

    public function setDireccionL($DireccionL) {
        $this->DireccionL = $DireccionL;
    }

    public function getDireccionL() {
        return $this->DireccionL;
    }

    public function setClienteL($ClienteL) {
        $this->ClienteL = $ClienteL;
    }

    public function getClienteL() {
        return $this->ClienteL;
    }

    public function setEmpresaL($EmpresaL) {
        $this->EmpresaL = $EmpresaL;
    }

    public function getEmpresaL() {
        return $this->EmpresaL;
    }

    public function setCrL($CrL) {
        $this->CrL = $CrL;
    }

    public function getCrL() {
        return $this->CrL;
    }

    public function setSucursalL($SucursalL) {
        $this->SucursalL = $SucursalL;
    }

    public function getSucursalL() {
        return $this->SucursalL;
    }

    public function setConceptoL($ConceptoL) {
        $this->ConceptoL = $ConceptoL;
    }

    public function getConceptoL() {
        return $this->ConceptoL;
    }

}
