<?php

class FotosFPDLCNordes extends FPDF {

    // Page header
    public $LogoCliente = '';

    function getLogoCliente() {
        return $this->LogoCliente;
    }

    function setLogoCliente($LogoCliente) {
        $this->LogoCliente = $LogoCliente;
    }

// Page header
    function Header() {

        $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
        if (!empty($this->getLogoCliente())) {
//LogoCliente
            $ext = pathinfo($this->getLogoCliente(), PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($this->getLogoCliente(), 245/* X */, 3/* Y */, 30/* W *//* H */);
            }
        }
// Fondo
        $this->Image(base_url() . 'img/banner.jpg', 0, 0, 85, 208);
        $this->Image(base_url() . 'img/separador.jpg', 0, 208, 280, 8);
        $this->SetDrawColor(120, 120, 120);
        $this->Line(5, 26, 270, 26);

        $this->SetFont('Arial', '', 15);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(5);
        $this->SetX(90);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'L');
        $this->SetY(10);
        $this->SetX(90);
        $this->SetFont('Arial', '', 10);
        $this->Cell(130, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'L');


        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(15);
        $this->SetX(90);
        $this->SetFont('Arial', 'I', 8.5);
        $this->MultiCell(130, 5, 'TRABAJO: ' . strtoupper(utf8_decode($this->getConceptoL())), 0, 'L');
        /* SITIO */
        $this->SetTextColor(155, 155, 155);
        $this->SetFont('Arial', 'B', 11);
        $this->SetY(5);
        $this->SetX(2);
        $this->MultiCell(80, 5, utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 'L');
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

// Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(210);
// Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
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

class FotosFPSNordes extends FPDF {

    public $LogoCliente;

    function getLogoCliente() {
        return $this->LogoCliente;
    }

    function setLogoCliente($LogoCliente) {
        $this->LogoCliente = $LogoCliente;
    }

// Page header
    function Header() {

        $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
        if (!empty($this->getLogoCliente())) {
//LogoCliente
            $ext = pathinfo($this->getLogoCliente(), PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($this->getLogoCliente(), 245/* X */, 3/* Y */, 30/* W *//* H */);
            }
        }
// Fondo
        $this->Image(base_url() . 'img/banner.jpg', 0, 0, 85, 208);
        $this->Image(base_url() . 'img/separador.jpg', 0, 167, 280, 8);
        $this->SetDrawColor(120, 120, 120);
        $this->Line(3, 15, 275, 15);
    }

// Page footer
    function Footer() {
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(169);
// Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
    }

}

class FotosFPDLDNordes extends FPDF {

// Page header
    public $LogoCliente = '';

    function getLogoCliente() {
        return $this->LogoCliente;
    }

    function setLogoCliente($LogoCliente) {
        $this->LogoCliente = $LogoCliente;
    }

// Page header
    function Header() {

        $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
        if (!empty($this->getLogoCliente())) {
//LogoCliente
            $ext = pathinfo($this->getLogoCliente(), PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($this->getLogoCliente(), 245/* X */, 3/* Y */, 30/* W *//* H */);
            }
        }
// Fondo
        $this->Image(base_url() . 'img/banner.jpg', 0, 0, 85, 208);
        $this->Image(base_url() . 'img/separador.jpg', 0, 208, 280, 8);
        $this->SetDrawColor(120, 120, 120);
        $this->Line(5, 26, 270, 26);
// Título
        $this->SetFont('Arial', '', 15);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(5);
        $this->SetX(90);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'L');
        $this->SetY(15);
        $this->SetX(90);
        $this->SetFont('Arial', '', 10);
        $this->Cell(130, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'L');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(20);
        $this->SetX(90);
        $this->Cell(130, 4, 'DIRECCION: ' . utf8_decode($this->getDireccionL()), 0, 1, 'L');
        /* SITIO */
        $this->SetTextColor(155, 155, 155);
        $this->SetFont('Arial', 'B', 11);
        $this->SetY(5);
        $this->SetX(2);
        $this->MultiCell(80, 5, utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 'L');

        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(155, 155, 155);
        $this->SetY(45);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("Estado Inicial"), 0, 1, 'L');
        $this->Ln(20);
    }

// Page footer
    function Footer() {

// Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(210);
// Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
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

class FotosFPDLPNordes extends FPDF {

// Page header
    public $LogoCliente = '';

    function getLogoCliente() {
        return $this->LogoCliente;
    }

    function setLogoCliente($LogoCliente) {
        $this->LogoCliente = $LogoCliente;
    }

// Page header
    function Header() {

        $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
        if (!empty($this->getLogoCliente())) {
//LogoCliente
            $ext = pathinfo($this->getLogoCliente(), PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($this->getLogoCliente(), 245/* X */, 3/* Y */, 30/* W *//* H */);
            }
        }
// Fondo
        $this->Image(base_url() . 'img/banner.jpg', 0, 0, 85, 208);
        $this->Image(base_url() . 'img/separador.jpg', 0, 208, 280, 8);
        $this->SetDrawColor(120, 120, 120);
        $this->Line(5, 26, 270, 26);
// Título
        $this->SetFont('Arial', '', 15);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(5);
        $this->SetX(90);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'L');
        $this->SetY(15);
        $this->SetX(90);
        $this->SetFont('Arial', '', 10);
        $this->Cell(130, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'L');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(20);
        $this->SetX(90);
        $this->Cell(130, 4, 'DIRECCION: ' . utf8_decode($this->getDireccionL()), 0, 1, 'L');
        /* SITIO */
        $this->SetTextColor(155, 155, 155);
        $this->SetFont('Arial', 'B', 11);
        $this->SetY(5);
        $this->SetX(2);
        $this->MultiCell(80, 5, utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 'L');

        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(155, 155, 155);
        $this->SetY(45);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("Estado Inicial"), 0, 1, 'L');
        $this->Ln(20);
    }

// Page footer
    function Footer() {

// Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(210);
// Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
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

class FotosFPDLANordes extends FPDF {

    public $LogoCliente = '';

    function getLogoCliente() {
        return $this->LogoCliente;
    }

    function setLogoCliente($LogoCliente) {
        $this->LogoCliente = $LogoCliente;
    }

// Page header
    function Header() {

        $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
        if (!empty($this->getLogoCliente())) {
//LogoCliente
            $ext = pathinfo($this->getLogoCliente(), PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($this->getLogoCliente(), 245/* X */, 3/* Y */, 30/* W *//* H */);
            }
        }
// Fondo
        $this->Image(base_url() . 'img/banner.jpg', 0, 0, 85, 208);
        $this->Image(base_url() . 'img/separador.jpg', 0, 208, 280, 8);
        $this->SetDrawColor(120, 120, 120);
        $this->Line(5, 26, 270, 26);
// Título
        $this->SetFont('Arial', '', 15);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(5);
        $this->SetX(90);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'L');
        $this->SetY(15);
        $this->SetX(90);
        $this->SetFont('Arial', '', 10);
        $this->Cell(130, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'L');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(20);
        $this->SetX(90);
        $this->Cell(130, 4, 'DIRECCION: ' . utf8_decode($this->getDireccionL()), 0, 1, 'L');
        /* SITIO */
        $this->SetTextColor(155, 155, 155);
        $this->SetFont('Arial', 'B', 11);
        $this->SetY(5);
        $this->SetX(2);
        $this->MultiCell(80, 5, utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 'L');

        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(155, 155, 155);
        $this->SetY(45);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("Estado Inicial"), 0, 1, 'L');
        $this->Ln(20);
    }

// Page footer
    function Footer() {

// Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(210);
// Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
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
