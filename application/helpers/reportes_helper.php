<?php

class FotosFPSMeor extends FPDF {

// Page header
    function Header() {
        // Logo
        $this->Image(base_url() . 'img/meor_encabezado.png', 0, 0, 279);
    }

// Page footer
    function Footer() {
        $this->Image(base_url() . 'img/meor_pie.png', 0, 169, 280);
    }

}

class FotosFPSGenerico extends FPDF {

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
        /* Imagen de reporte visita previa */
        if (!empty($this->getLogoCliente())) {
            //LogoCliente
            $ext = pathinfo($this->getLogoCliente(), PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($this->getLogoCliente(), 230/* X */, 3/* Y */, 25/* W *//* H */);
            }
        }

        // Logo
        $this->Image(base_url() . 'img/android-icon-192x192.png', 5, 3, 25);
        $this->Line(5, 20, 270, 20);
    }

// Page footer
    function Footer() {
        $this->SetFont('Arial', 'I', 8);
        $this->SetY(165);
        // Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
        $this->SetY(-15);
    }

}

class PCB extends FPDF {

    public $Especialidad = '';
    public $CentroCostos = '';
    public $Empresa = '';
    public $FolioCliente = '';

    public function setEspecialidad($Especialidad) {
        $this->$Especialidad = $Especialidad;
    }

    public function getEspecialidad() {
        return $this->Especialidad;
    }

    public function setCentroCostos($CentroCostos) {
        $this->CentroCostos = $CentroCostos;
    }

    public function getCentroCostos() {
        return $this->CentroCostos;
    }

    public function setEmpresa($Empresa) {
        $this->Empresa = $Empresa;
    }

    public function getEmpresa() {
        return $this->Empresa;
    }

    public function setFolioCliente($FolioCliente) {
        $this->FolioCliente = $FolioCliente;
    }

    public function getFolioCliente() {
        return $this->FolioCliente;
    }

    function Header() {
        /* ENCABEZADO */
        $this->SetFont('Arial', 'B', 11);
        $this->SetTextColor(226, 107, 10);
        $this->SetDrawColor(0, 176, 240);
        // Título
        $this->SetLineWidth(0.4);
        //Cuadro principal contenedor
        $this->Image(base_url() . 'uploads/Clientes/1/bancomer_logo.png', 6, 6, 40);
        $this->Rect(5, 5, 270, 24.8);
        $this->SetY(12);
        $this->SetX(5);
        $this->Cell(270, 5, utf8_decode("CARÁTULA DE ESTIMACIÓN DE COSTOS 2018"), 0, 0, 'C');
        //Cuadro interior izquierda
        $this->SetLineWidth(0.05);
        $this->Rect(225, 5, 50, 20);
        $this->SetTextColor(0, 176, 240);
        $this->SetFont('Arial', 'B', 9.5);
        $this->SetY(12);
        $this->SetX(225);
        $this->Cell(50, 5, utf8_decode($this->getEspecialidad()), 0, 1, 'C');
//        $this->SetY(15);
//        $this->SetX(225);
//        $this->Cell(50, 5, utf8_decode("Atm´s Remotos"), 0, 1, 'C');


        /* DATOS */
        $this->SetTextColor(0, 31, 95);
        $this->SetFillColor(184, 204, 228);

        $this->SetY(20);
        $this->SetX(5);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(10, 5, utf8_decode('Tipo:'), 1, 1, 'C');

        $this->SetY(20);
        $this->SetX(15);
        $this->SetFont('Arial', '', 6);
        $this->Cell(115, 5, utf8_decode($this->getCentroCostos()), 1, 1, 'C', true);


        /* Region y Folio */
        $this->SetY(20);
        $this->SetX(130);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(30, 5, utf8_decode('REGIÓN'), 1, 1, 'C');

        $this->SetY(20);
        $this->SetX(160);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(15, 5, 'LOCAL', 1, 1, 'C', true);

        $this->SetY(20);
        $this->SetX(175);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(25, 5, utf8_decode('SOLICITUD GPS:'), 1, 1, 'C');

        $this->SetY(20);
        $this->SetX(200);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(25, 5, $this->getFolioCliente(), 1, 1, 'C', true);


        /* GPS */
        $this->SetY(25);
        $this->SetX(5);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(10, 5, utf8_decode('GPS:'), 1, 1, 'C');

        $this->SetY(25);
        $this->SetX(15);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(15, 4.6, '119297', 1, 1, 'C', true);

        /* Empresa */
        $this->SetY(25);
        $this->SetX(30);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(100, 5, utf8_decode('EMPRESA:'), 1, 1, 'C');

        $this->SetY(25);
        $this->SetX(130);
        $this->SetFont('Arial', '', 6);
        $this->Cell(145, 5, $this->getEmpresa(), 1, 1, 'C');


        /* CUERPO */
        $this->SetY(35);
        $this->SetX(5);
        $this->SetFillColor(0, 176, 240);
        $this->SetDrawColor(0, 112, 192);
        $this->Cell(270, 8, '', 1, 1, 'C', true);
        $this->SetY(30);
        $this->SetX(5);
        $this->SetTextColor(255, 255, 255);
        $this->SetFillColor(0, 32, 96);
        $this->SetDrawColor(255, 255, 255);
        $this->Cell(270, 5, utf8_decode("DENTRO DEL PRECIARIO"), 0, 1, 'C', true);
        /* TITULOS */

        /* ENCABEZADO TITULOS */
        $this->SetFont('Arial', 'B', 6.5);
        $this->SetTextColor(0, 31, 95);
        $this->SetDrawColor(0, 112, 192);
        $this->SetY(35);
        $this->SetX(5);
        $this->Cell(10, 8, utf8_decode("No."), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(15);
        $this->Cell(15, 8, utf8_decode("CÓDIGO"), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(30);
        $this->Cell(100, 8, utf8_decode("DESCRIPCIÓN"), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(130);
        $this->SetFont('Arial', 'B', 6);
        $this->Cell(15, 8, utf8_decode("TIPO PRECIO"), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(145);
        $this->SetFont('Arial', 'B', 6.5);
        $this->Cell(15, 8, utf8_decode("CATALOGO"), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(160);
        $this->Cell(15, 8, utf8_decode("TIPO"), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(175);
        $this->Cell(25, 8, utf8_decode("UNIDAD"), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(200);
        $this->Cell(25, 8, utf8_decode("CANTIDAD"), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(225);
        $this->Cell(25, 8, utf8_decode("PU"), 1, 1, 'C');
        $this->SetY(35);
        $this->SetX(250);
        $this->Cell(25, 8, utf8_decode("TOTAL"), 1, 1, 'C');
        $this->SetY(43);
    }

    var $widths;
    var $aligns;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 4 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);

        //Se pone para que depues de insertar una pagina establezca la posicion en X = 5
        $this->SetX(5);

        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';

            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();

            $this->SetDrawColor(0, 112, 192);
            $this->SetLineWidth(0.05);
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 4, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function RowTotal($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Se pone para que depues de insertar una pagina establezca la posicion en X = 5
        $this->SetX(235);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->SetFont('Arial', 'B', 8);
            $this->SetFillColor(0, 176, 240);
            $this->SetDrawColor(0, 112, 192);
            $this->SetTextColor(255, 255, 255);
            $this->MultiCell($w, 5, $data[$i], 1, $a, true);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

}

class PFGPB extends FPDF {

    public $CR = '';
    public $Sucursal = '';
    public $Empresa = '';
    public $FolioCliente = '';

    public function setCR($CR) {
        $this->$CR = $CR;
    }

    public function getCR() {
        return $this->CR;
    }

    public function setSucursal($Sucursal) {
        $this->Sucursal = $Sucursal;
    }

    public function getSucursal() {
        return $this->Sucursal;
    }

    public function setEmpresa($Empresa) {
        $this->Empresa = $Empresa;
    }

    public function getEmpresa() {
        return $this->Empresa;
    }

    public function setFolioCliente($FolioCliente) {
        $this->FolioCliente = $FolioCliente;
    }

    public function getFolioCliente() {
        return $this->FolioCliente;
    }

    function Header() {
        /* ENCABEZADO */
        // Arial bold 15
        $this->SetFont('Arial', 'B', 9);
        // Título
        $this->SetY(5);
        // Movernos a la derecha
        $this->SetX(25);
        $this->Cell(165, 5, utf8_decode("PRESUPUESTO DE CONCILIACÓN DE PRECIOS UNITARIOS DE CONCEPTOS FUERA DE PROYECTO"), 0, 0, 'C');
        $this->SetFont('Arial', 'B', 8);
        /* CUERPO */
        $CURRENT_Y = $this->GetY();
        $this->SetY(15);
        $this->SetLineWidth(0.2);
        /* INICIA  EN LA ESQUINA DE EMPRESA */
        $this->Rect(145, 15, 65, 20);
        /* SEGUNDO RECUADRO */
        $this->Rect(5, 22, 205, 13);
        /**/
        $this->SetY(40);
        $this->SetX(5);
        $this->SetFillColor(169, 208, 255);
        $this->Cell(205, 5, '', 1, 1, 'C', true);
        $this->SetY(35);
        $this->SetX(5);
        $this->SetFillColor(255, 252, 76);
        $this->Cell(205, 5, utf8_decode("IMPORTE CONTRATADO"), 1, 1, 'C', true);
        /* TITULOS */
        $this->SetFont('Arial', 'B', 8);
        $this->SetY(16);
        $this->SetX(145);
        $this->Cell(65, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
        /* ENCABEZADO TITULOS */
        $this->SetY(40);
        $this->SetX(5);
        $this->Cell(15, 5, utf8_decode("CÓDIGO"), 1, 1, 'C');
        $this->SetY(40);
        $this->SetX(20);
        $this->Cell(110, 5, utf8_decode("CONCEPTO"), 1, 1, 'C');
        $this->SetY(40);
        $this->SetX(130);
        $this->Cell(15, 5, utf8_decode("UNIDAD"), 1, 1, 'C');
        $this->SetY(40);
        $this->SetX(145);
        $this->Cell(20, 5, utf8_decode("CANTIDAD"), 1, 1, 'C');
        $this->SetY(40);
        $this->SetX(165);
        $this->Cell(20, 5, utf8_decode("P.U."), 1, 1, 'C');
        $this->SetY(40);
        $this->SetX(185);
        $this->Cell(25, 5, utf8_decode("IMPORTE"), 1, 1, 'C');
        /* DATOS */
        $this->SetY(23);
        $this->SetX(5);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(140, 10, "CR: " . $this->getCR() . " - " . $this->getSucursal() . " - " . $this->getFolioCliente(), 0, 1, 'C');
        $this->SetY(23);
        $this->SetX(145);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(65, 10, $this->getEmpresa(), 0, 1, 'C');
        $this->SetY(45);
    }

    var $widths;
    var $aligns;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 4 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);

        //Se pone para que depues de insertar una pagina establezca la posicion en X = 5
        $this->SetX(5);

        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';

            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 4, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function RowTotal($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Se pone para que depues de insertar una pagina establezca la posicion en X = 5
        $this->SetX(5);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->SetFont('Arial', 'B', 6.5);
            $this->SetFillColor(255, 252, 76);
            $this->MultiCell($w, 5, $data[$i], 1, $a, true);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

}

class PDF extends FPDF {

}

class FotosFPB extends FPDF {

// Page header
    function Header() {
        if ($this->page == 1 && $this->getLast() == '') {
            /* Pagina principal */
            $this->SetY(0);
            $this->SetX(0);
            $this->SetFillColor(10, 79, 164);
            $this->Cell(279, 36, '', 0, 0, 'L', true);
            $this->SetY(36);
            $this->SetX(0);
            $this->Image(base_url() . 'img/logo_cajeros.png', 7, 7, 25);
            $this->SetFillColor(0, 101, 193);
            $this->Cell(279, 36, '', 0, 0, 'L', true);
            $this->SetY(72);
            $this->SetX(0);
            $this->SetFillColor(0, 159, 229);
            $this->Cell(279, 36, '', 0, 0, 'L', true);
            $this->SetY(108);
            $this->SetX(0);
            $this->SetFillColor(82, 189, 236);
            $this->Cell(279, 36, '', 0, 0, 'L', true);
            $this->SetY(144);
            $this->SetX(0);
            $this->SetFillColor(136, 209, 243);
            $this->Cell(279, 36, '', 0, 0, 'L', true);
            $this->SetY(180);
            $this->SetX(0);
            $this->SetFillColor(181, 229, 249);
            $this->Cell(279, 36, '', 0, 0, 'L', true);
        } else if ($this->getLast() == '') {
            /* Estructura de la presentación */
            $this->Image(base_url() . 'img/barra_cajeros.png', 0, 0, 7);
            $this->Image(base_url() . 'img/bbva_cajeros.png', 13, 6, 25);
            $this->SetDrawColor(137, 209, 243);
            $this->SetLineWidth(0.8);
            $this->SetY(5);
            $this->SetX(207);
            $this->SetFont('Arial', '', 9);
            $this->SetTextColor(0, 112, 192);
            $this->Cell(30, 7, utf8_decode('CR ó Folio:'), 1, 0, 'C');
            $this->SetTextColor(14, 114, 236);
            $this->SetFont('Arial', 'B', 9);
            $this->Cell(30, 7, utf8_decode($this->getCRL()), 1, 0, 'C');

            /* Primer recuardo */
            $this->SetLineWidth(0.9);
            $this->SetDrawColor(10, 79, 164);
            $this->Rect(13, 18, 123, 84);
            $this->SetDrawColor(137, 209, 243);
            $this->Rect(13, 104, 123, 8);

            /* Segundo recuardo */
            $this->SetDrawColor(10, 79, 164);
            $this->Rect(144, 18, 123, 84);
            $this->SetDrawColor(137, 209, 243);
            $this->Rect(144, 104, 123, 8);

            /* Tercer recuardo */
            $this->SetDrawColor(10, 79, 164);
            $this->Rect(13, 115, 123, 84);
            $this->SetDrawColor(137, 209, 243);
            $this->Rect(13, 201, 123, 8);

            /* Cuarto recuardo */
            $this->SetDrawColor(10, 79, 164);
            $this->Rect(144, 115, 123, 84);
            $this->SetDrawColor(137, 209, 243);
            $this->Rect(144, 201, 123, 8);
        } else if ($this->getLast() == 'Si') {
            /* Estructura de la presentación */
            $this->Image(base_url() . 'img/barra_cajeros.png', 0, 0, 7);
            $this->Image(base_url() . 'img/bbva_cajeros.png', 13, 6, 25);
            $this->SetDrawColor(137, 209, 243);
            $this->SetLineWidth(0.8);
            $this->SetY(5);
            $this->SetX(207);
            $this->SetFont('Arial', '', 9);
            $this->SetTextColor(0, 112, 192);
            $this->Cell(30, 7, utf8_decode('CR ó Folio:'), 1, 0, 'C');
            $this->SetTextColor(14, 114, 236);
            $this->SetFont('Arial', 'B', 9);
            $this->Cell(30, 7, utf8_decode($this->getCRL()), 1, 0, 'C');

            $this->SetFont('Arial', 'B', 10);
            /* Primer recuardo */
            $this->SetLineWidth(0.9);
            $this->SetDrawColor(10, 79, 164);
            $this->SetY(18);
            $this->SetX(13);
            $this->Cell(123, 180, '', 1, 0, 'C');
            $this->SetDrawColor(137, 209, 243);
            $this->SetY(200);
            $this->SetX(13);
            $this->Cell(123, 8, 'COMENTARIOS', 1, 0, 'C');

            /* Segundo recuardo */
            $this->SetDrawColor(10, 79, 164);
            $this->SetY(18);
            $this->SetX(144);
            $this->Cell(123, 180, '', 1, 0, 'C');
            $this->SetDrawColor(137, 209, 243);
            $this->Rect(144, 200, 123, 8);
            $this->SetY(200);
            $this->SetX(144);
            $this->Cell(123, 8, 'VISITA PREVIA', 0, 0, 'C');
        }
    }

// Page footer
    function Footer() {
        if ($this->page > 1) {
            $this->setY(-60);
            $this->SetFont('Arial', 'B', 9);
            $this->SetTextColor(10, 79, 164);
            $this->Text(271, 210, $this->PageNo(), 0, 0, 'R');
        }
    }

    /*  STTER AND GETTER */

    public $EmpresaL = '';
    public $CrL = '';
    public $SucursalL = '';
    public $ConceptoL = '';
    public $ClienteL = '';
    public $DireccionL = '';
    public $Last = '';

    public function setLast($Last) {
        $this->$Last = $Last;
    }

    public function getLast() {
        return $this->Last;
    }

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

class PDFCI extends FPDF {

    public $LogoCliente = '';

    function getLogoCliente() {
        return $this->LogoCliente;
    }

    function setLogoCliente($LogoCliente) {
        $this->LogoCliente = $LogoCliente;
    }

    function Header() {


        $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
        /* Imagen de reporte visita previa */
        if (!empty($this->getLogoCliente())) {
            //LogoCliente
            $ext = pathinfo($this->getLogoCliente(), PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($this->getLogoCliente(), 176/* X */, 5/* Y */, 30/* W *//* H */);
            }
        }



        // Logo
        $this->Image(base_url() . 'img/watermark.png', 10, 95);
        $this->Image(base_url() . 'img/ms-icon-144x144AYR.png', 3, 3, 30);
        $this->Image(base_url() . 'img/barra_Presupuesto.png', 5, 21, 210, 6);



        $this->SetY(3);
        $this->SetX(205);

        $this->SetFont('Arial', '', 7.5);
        $this->Cell(8, 5, utf8_decode($this->getID()), 0, 0, 'L');

        $this->SetX(32);
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(50, 5, utf8_decode("A&R CONSTRUCCIONES SA DE CV"), 0, 0, 'L');
        $this->SetY(9);
        $this->SetX(32);
        $this->SetFont('Arial', 'B', 7);
        $this->Cell(50, 5, utf8_decode("·CONSTRUCCIÓN"), 0, 0, 'L');
        $this->SetY(12);
        $this->SetX(32);
        $this->Cell(50, 5, utf8_decode("·MANTENIMIENTO"), 0, 0, 'L');
        $this->SetY(15);
        $this->SetX(32);
        $this->Cell(50, 5, utf8_decode("·PROYECTOS EJECUTIVOS"), 0, 0, 'L');
        $this->SetY(18);
        $this->SetX(32);
        $this->Cell(50, 5, utf8_decode("·PROYECTOS DE AHORRO DE ENERGÍA"), 0, 0, 'L');
        /* INICIO CUERPO */
        $this->SetY(28);
        $this->SetX(100);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 5, utf8_decode("BUDGET"), 0, 0, 'L');
        $this->SetY(28);
        $this->SetX(145);
        $this->SetFont('Arial', 'B', 7.5);
        $this->Cell(60, 5, utf8_decode($this->getFolioCliente()), 0, 0, 'R');
        /* DATS GENERALES */
        $this->SetY(33);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(80, 4, utf8_decode($this->getCliente()), 0, 0, 'L');
        $this->SetY(33);
        $this->SetX(140);
        $this->Cell(60, 4, utf8_decode('GUADALAJARA, JALISCO'), 0, 0, 'R');
        $this->SetY(37);
        $this->SetX(10);
        $this->Cell(20, 4, utf8_decode("BRANCH OFFICE: "), 0, 0, 'L');
        $this->SetX(35);
        $this->SetFont('Arial', '', 8);
        $this->Cell(100, 4, utf8_decode($this->getSucursal() . ' CR ' . $this->getCR()), 0, 0, 'L');
        $this->SetY(41);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 4, utf8_decode("WORK: "), 0, 0, 'L');
        $this->SetX(30);
        $this->SetFont('Arial', '', 8);
        $this->MultiCell(175, 3.5, utf8_decode($this->getTrabajoSolicitado()), 0, 'L');
//        $this->SetY(48);
//        $this->SetX(10);
//        $this->SetFont('Arial', 'B', 8);
//        $this->Cell(80, 4, utf8_decode("INMUEBLES DIVISIÓN DE " . $this->getRegion()), 0, 0, 'L');
        $this->SetY(55);
        $this->SetX(10);
        $this->SetFont('Arial', '', 7.5);
        $this->MultiCell(190, 3.5, utf8_decode("                 FOR THIS CONDUCT WE HAVE THE PLEASURE TO PUT TO YOUR FRIENDLY CONSIDERATION OF THE BUDGET FOR MAINTENANCE WORK AND CONSERVATION FOR: " . ($this->getTrabajoRequerido()) . " BRANCH OFFICE: " . ($this->getSucursal() . " " . $this->getCR()) . " IN " . ($this->getCalle()) . ' NUMBER. ' . $this->getNoExterior() . ' ' . $this->getColonia() . ', ' . $this->getCiudad() . ', ' . $this->getEstado()), 0, 'J');
        /* ENCABEZADO DETALLE */
        $this->SetLineWidth(0.4);
        /* ENCABEZADO TITULOS */
        $this->SetFont('Arial', 'B', 6.5);
        $this->SetY(75.5);
        $this->SetX(10);
        $this->Cell(15, 5, utf8_decode("ID"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(25);
        $this->Cell(110, 5, utf8_decode("ITEM"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(135);
        $this->Cell(15, 5, utf8_decode("UNIT"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(150);
        $this->Cell(15, 5, utf8_decode("QUANTITY"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(165);
        $this->Cell(20, 5, utf8_decode("PRICE"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(185);
        $this->Cell(20, 5, utf8_decode("TOTAL"), 1, 1, 'C');
    }

    var $widths;
    var $aligns;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 4 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 4, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function RowSubtotal($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->SetFont('Arial', 'B', 6.5);
            $this->SetFillColor(160, 160, 160);
            $this->MultiCell($w, 5, $data[$i], 1, $a, true);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

    function Footer() {
        /* Leyenda */
        $this->SetY(232);
        $this->SetX(10);
        $this->SetFont('Arial', '', 6.5);
        $this->MultiCell(190, 3, utf8_decode("THE AMOUNT OF THIS BUDGET DOES NOT INCLUDE 16% IVA (MEXICAN TAX) AND IT IS VALID FOR 30 DAYS FROM THE BUDGET GENERATION DATE. WITHOUT ANOTHER PARTICULAR OF MOMENT AND IN WAITING TO SEE US FAVORED WITH YOUR PREFERENCE, I REMAIN TO YOUR APPRECIABLE ORDERS.."), 0, 'C');
        /* Firma */
        $this->SetY(252);
        $this->SetX(73);
        $this->SetFont('Arial', 'B', 7.5);
        $this->cell(70, 5, utf8_decode("Ing. Victor Ayala Ruiz"), 'T', 0, 'C');
        $this->SetY(257);
        $this->SetX(73);
        $this->SetFont('Arial', '', 7.5);
        $this->cell(70, 5, utf8_decode("A&R CONSTRUCCIONES SA DE CV"), 0, 0, 'C');
        /* Barra Footer */
        $this->Image(base_url() . 'img/barra_Presupuesto.png', 5, 257 + 2, 210, 6);
        $this->SetY(261);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 7);
        $this->MultiCell(60, 3, utf8_decode("
Justo Sierra No. 2150
Col. Americana
CP. 44600
Guadalajara, Jalisco, MÉXICO"), 0, 'L');
        $this->SetY(263);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("victor.ayala@ayr.mx"), 0, 0, 'L');
        $this->SetY(266);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("arangel@ayr.mx"), 0, 0, 'L');
        $this->SetY(270);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("Tel. 33.18.16.53.00"), 0, 0, 'L');
    }

    /*  STTER AND GETTER */

    public $ID = '';
    public $FolioCliente = '';
    public $Cliente = '';
    public $Sucursal = '';
    public $CR = '';
    public $TrabajoSolicitado = '';
    public $Region = '';
    public $TrabajoRequerido = '';
    public $Calle = '';
    public $NoExterior = '';
    public $Colonia = '';
    public $Ciudad = '';
    public $Estado = '';

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function getID() {

        return $this->ID;
    }

    public function setEstado($Estado) {
        $this->Estado = $Estado;
    }

    public function getEstado() {

        return $this->Estado;
    }

    public function setCiudad($Ciudad) {
        $this->Ciudad = $Ciudad;
    }

    public function getCiudad() {
        return $this->Ciudad;
    }

    public function setColonia($Colonia) {
        $this->Colonia = $Colonia;
    }

    public function getColonia() {
        return $this->Colonia;
    }

    public function setNoExterior($NoExterior) {
        $this->NoExterior = $NoExterior;
    }

    public function getNoExterior() {
        return $this->NoExterior;
    }

    public function setCalle($Calle) {
        $this->Calle = $Calle;
    }

    public function getCalle() {
        return $this->Calle;
    }

    public function setTrabajoRequerido($TrabajoRequerido) {
        $this->TrabajoRequerido = $TrabajoRequerido;
    }

    public function getTrabajoRequerido() {
        return $this->TrabajoRequerido;
    }

    public function setRegion($Region) {
        $this->Region = $Region;
    }

    public function getRegion() {
        return $this->Region;
    }

    public function setTrabajoSolicitado($TrabajoSolicitado) {
        $this->TrabajoSolicitado = $TrabajoSolicitado;
    }

    public function getTrabajoSolicitado() {
        return $this->TrabajoSolicitado;
    }

    public function setCR($CR) {
        $this->CR = $CR;
    }

    public function getCR() {
        return $this->CR;
    }

    public function setSucursal($Sucursal) {
        $this->Sucursal = $Sucursal;
    }

    public function getSucursal() {
        return $this->Sucursal;
    }

    public function setCliente($Cliente) {
        $this->Cliente = $Cliente;
    }

    public function getCliente() {
        return $this->Cliente;
    }

    public function setFolioCliente($FolioCliente) {
        $this->FolioCliente = $FolioCliente;
    }

    public function getFolioCliente() {
        return $this->FolioCliente;
    }

}

class PDFC extends FPDF {

    public $LogoCliente = '';

    function getLogoCliente() {
        return $this->LogoCliente;
    }

    function setLogoCliente($LogoCliente) {
        $this->LogoCliente = $LogoCliente;
    }

    function Header() {


        $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
        /* Imagen de reporte visita previa */
        if (!empty($this->getLogoCliente())) {
            //LogoCliente
            $ext = pathinfo($this->getLogoCliente(), PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($this->getLogoCliente(), 176/* X */, 5/* Y */, 30/* W *//* H */);
            }
        }



        // Logo
        $this->Image(base_url() . 'img/watermark.png', 10, 95);
        $this->Image(base_url() . 'img/ms-icon-144x144AYR.png', 3, 3, 30);
        $this->Image(base_url() . 'img/barra_Presupuesto.png', 5, 21, 210, 6);



        $this->SetY(3);
        $this->SetX(205);

        $this->SetFont('Arial', '', 7.5);
        $this->Cell(8, 5, utf8_decode($this->getID()), 0, 0, 'L');

        $this->SetX(32);
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(50, 5, utf8_decode("A&R CONSTRUCCIONES SA DE CV"), 0, 0, 'L');
        $this->SetY(9);
        $this->SetX(32);
        $this->SetFont('Arial', 'B', 7);
        $this->Cell(50, 5, utf8_decode("·CONSTRUCCIÓN"), 0, 0, 'L');
        $this->SetY(12);
        $this->SetX(32);
        $this->Cell(50, 5, utf8_decode("·MANTENIMIENTO"), 0, 0, 'L');
        $this->SetY(15);
        $this->SetX(32);
        $this->Cell(50, 5, utf8_decode("·PROYECTOS EJECUTIVOS"), 0, 0, 'L');
        $this->SetY(18);
        $this->SetX(32);
        $this->Cell(50, 5, utf8_decode("·PROYECTOS DE AHORRO DE ENERGÍA"), 0, 0, 'L');
        /* INICIO CUERPO */
        $this->SetY(28);
        $this->SetX(100);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 5, utf8_decode("PRESUPUESTO"), 0, 0, 'L');
        $this->SetY(28);
        $this->SetX(145);
        $this->SetFont('Arial', 'B', 7.5);
        $this->Cell(60, 5, utf8_decode($this->getFolioCliente()), 0, 0, 'R');
        /* DATS GENERALES */
        $this->SetY(33);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(80, 4, utf8_decode($this->getCliente()), 0, 0, 'L');
        $this->SetY(33);
        $this->SetX(140);
        $this->Cell(60, 4, utf8_decode('GUADALAJARA, JALISCO A ' . $this->getFechaOrigen()), 0, 0, 'R');
        $this->SetY(37);
        $this->SetX(10);
        $this->Cell(20, 4, utf8_decode("INMUEBLE: "), 0, 0, 'L');
        $this->SetX(30);
        $this->SetFont('Arial', '', 8);
        $this->Cell(100, 4, utf8_decode($this->getSucursal() . ' CR ' . $this->getCR()), 0, 0, 'L');
        $this->SetY(41);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 4, utf8_decode("TRABAJO: "), 0, 0, 'L');
        $this->SetX(30);
        $this->SetFont('Arial', '', 8);
        $this->MultiCell(175, 3.5, utf8_decode($this->getTrabajoSolicitado()), 0, 'L');
        $this->SetY(48);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(80, 4, utf8_decode("INMUEBLES DIVISIÓN DE " . $this->getRegion()), 0, 0, 'L');
        $this->SetY(55);
        $this->SetX(10);
        $this->SetFont('Arial', '', 7.5);
        $this->MultiCell(190, 3.5, utf8_decode("                 POR ESTE CONDUCTO TENEMOS EL AGRADO DE PONER A SU AMABLE CONSIDERACIÓN DEL PRESUPUESTO POR TRABAJOS DE MANTENIMEINTO Y CONSERVACIÓN REFERENTES A : " . ($this->getTrabajoRequerido()) . " EN LA SUCURSAL DEL INMUEBLE: " . ($this->getSucursal() . ' CR ' . $this->getCR()) . " UBICADA EN " . ($this->getCalle()) . ' No. ' . $this->getNoExterior() . ' ' . $this->getColonia() . ', ' . $this->getCiudad() . ', ' . $this->getEstado()), 0, 'J');
        /* ENCABEZADO DETALLE */
        $this->SetLineWidth(0.4);
        /* ENCABEZADO TITULOS */
        $this->SetFont('Arial', 'B', 6.5);
        $this->SetY(75.5);
        $this->SetX(10);
        $this->Cell(15, 5, utf8_decode("CLAVE"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(25);
        $this->Cell(110, 5, utf8_decode("CONCEPTO"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(135);
        $this->Cell(15, 5, utf8_decode("UNIDAD"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(150);
        $this->Cell(15, 5, utf8_decode("VOLUMEN"), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(165);
        $this->Cell(20, 5, utf8_decode("P.U."), 1, 1, 'C');
        $this->SetY(75.5);
        $this->SetX(185);
        $this->Cell(20, 5, utf8_decode("IMPORTE"), 1, 1, 'C');
    }

    var $widths;
    var $aligns;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 4 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 4, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function RowSubtotal($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->SetFont('Arial', 'B', 6.5);
            $this->SetFillColor(160, 160, 160);
            $this->MultiCell($w, 5, $data[$i], 1, $a, true);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

    function Footer() {
        /* Leyenda */
        $this->SetY(232);
        $this->SetX(10);
        $this->SetFont('Arial', '', 6.5);
        $this->MultiCell(190, 3, utf8_decode("EL IMPORTE DE ESTE PRESUPUESTO NO INCLUYE 16% IVA. VIGENCIA VÁLIDA POR 30 DÍAS A PARTIR DE LA FECHA DE GENERACIÓN DEL PRESUPUESTO SIN OTRO PARTICULAR DE MOMENTO Y EN ESPERA DE VERNOS FAVORECIDOS CON SU PREFERENCIA, QUEDO A SUS APRECIABLES ORDENES."), 0, 'C');
        /* Firma */
        $this->SetY(252);
        $this->SetX(73);
        $this->SetFont('Arial', 'B', 7.5);
        $this->cell(70, 5, utf8_decode("Ing. Victor Ayala Ruiz"), 'T', 0, 'C');
        $this->SetY(257);
        $this->SetX(73);
        $this->SetFont('Arial', '', 7.5);
        $this->cell(70, 5, utf8_decode("A & R CONSTRUCCIONES SA DE CV"), 0, 0, 'C');
        /* Barra Footer */
        $this->Image(base_url() . 'img/barra_Presupuesto.png', 5, 257 + 2, 210, 6);
        $this->SetY(261);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 7);
        $this->MultiCell(60, 3, utf8_decode("
Justo Sierra No. 2150
Col. Americana
CP. 44600
Guadalajara, Jalisco, MÉXICO"), 0, 'L');
        $this->SetY(263);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("victor.ayala@ayr.mx"), 0, 0, 'L');
        $this->SetY(266);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("arangel@ayr.mx"), 0, 0, 'L');
        $this->SetY(270);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("Tel. 33.18.16.53.00"), 0, 0, 'L');
    }

    /*  STTER AND GETTER */

    public $ID = '';
    public $FolioCliente = '';
    public $Cliente = '';
    public $Sucursal = '';
    public $CR = '';
    public $TrabajoSolicitado = '';
    public $Region = '';
    public $TrabajoRequerido = '';
    public $Calle = '';
    public $NoExterior = '';
    public $Colonia = '';
    public $Ciudad = '';
    public $Estado = '';
    public $FechaOrigen = '';

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function getID() {

        return $this->ID;
    }

    public function setFechaOrigen($FechaOrigen) {
        $this->FechaOrigen = $FechaOrigen;
    }

    public function getFechaOrigen() {

        return $this->FechaOrigen;
    }

    public function setEstado($Estado) {
        $this->Estado = $Estado;
    }

    public function getEstado() {

        return $this->Estado;
    }

    public function setCiudad($Ciudad) {
        $this->Ciudad = $Ciudad;
    }

    public function getCiudad() {
        return $this->Ciudad;
    }

    public function setColonia($Colonia) {
        $this->Colonia = $Colonia;
    }

    public function getColonia() {
        return $this->Colonia;
    }

    public function setNoExterior($NoExterior) {
        $this->NoExterior = $NoExterior;
    }

    public function getNoExterior() {
        return $this->NoExterior;
    }

    public function setCalle($Calle) {
        $this->Calle = $Calle;
    }

    public function getCalle() {
        return $this->Calle;
    }

    public function setTrabajoRequerido($TrabajoRequerido) {
        $this->TrabajoRequerido = $TrabajoRequerido;
    }

    public function getTrabajoRequerido() {
        return $this->TrabajoRequerido;
    }

    public function setRegion($Region) {
        $this->Region = $Region;
    }

    public function getRegion() {
        return $this->Region;
    }

    public function setTrabajoSolicitado($TrabajoSolicitado) {
        $this->TrabajoSolicitado = $TrabajoSolicitado;
    }

    public function getTrabajoSolicitado() {
        return $this->TrabajoSolicitado;
    }

    public function setCR($CR) {
        $this->CR = $CR;
    }

    public function getCR() {
        return $this->CR;
    }

    public function setSucursal($Sucursal) {
        $this->Sucursal = $Sucursal;
    }

    public function getSucursal() {
        return $this->Sucursal;
    }

    public function setCliente($Cliente) {
        $this->Cliente = $Cliente;
    }

    public function getCliente() {
        return $this->Cliente;
    }

    public function setFolioCliente($FolioCliente) {
        $this->FolioCliente = $FolioCliente;
    }

    public function getFolioCliente() {
        return $this->FolioCliente;
    }

}

class FotosFPDF extends FPDF {

// Page header
    function Header() {
        // Logo
        $this->Image($this->getLogo(), 5, 5, 40);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 9);
        // Título
        $this->SetY(5);
        // Movernos a la derecha
        $this->Cell(75);
        $this->Cell(125, 25, utf8_decode("REPORTE FOTOGRÁFICO"), 0, 0, 'C');
        $this->SetFont('Arial', 'B', 8);
        $this->SetY(5);
        $this->SetX(180);
        $this->MultiCell(93, 3.5, utf8_decode($this->getLeyendaReporte()), 0, 'R');
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
    public $LeyendaReporte = '';

    public function setLeyendaReporte($LeyendaReporte) {
        $this->LeyendaReporte = $LeyendaReporte;
    }

    public function getLeyendaReporte() {
        return $this->LeyendaReporte;
    }

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

    var $widths;
    var $aligns;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 4 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);

        //Se pone para que depues de insertar una pagina establezca la posicion en X = 5
        $this->SetX(5);

        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';

            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 4, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

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
                $this->Image($this->getLogoCliente(), 230/* X */, 5/* Y */, 30/* W *//* H */);
            }
        }



        // Logo
        $this->Image(base_url() . 'img/android-icon-192x192.png', 5, 3, 35);
        $this->Line(5, 26, 270, 26);
        // Título
        $this->SetFont('Arial', '', 15);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(5);
        $this->SetX(95);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'C');
        $this->SetY(15);
        $this->SetX(70);
        $this->SetFont('Arial', '', 10);
        $this->Cell(130, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'C');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(20);
        $this->SetX(70);
        $this->Cell(130, 4, 'DIRECCION: ' . utf8_decode($this->getDireccionL()), 0, 1, 'C');
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

class FotosFPDLP extends FPDF {

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
                $this->Image($this->getLogoCliente(), 230/* X */, 5/* Y */, 30/* W *//* H */);
            }
        }



        // Logo
        $this->Image(base_url() . 'img/android-icon-192x192.png', 5, 3, 35);
        $this->Line(5, 26, 270, 26);
        // Título
        $this->SetFont('Arial', '', 15);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(5);
        $this->SetX(95);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'C');
        $this->SetY(15);
        $this->SetX(70);
        $this->SetFont('Arial', '', 10);
        $this->Cell(130, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'C');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(20);
        $this->SetX(70);
        $this->Cell(130, 4, 'DIRECCION: ' . utf8_decode($this->getDireccionL()), 0, 1, 'C');
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
                $this->Image($this->getLogoCliente(), 230/* X */, 5/* Y */, 30/* W *//* H */);
            }
        }



        // Logo
        $this->Image(base_url() . 'img/android-icon-192x192.png', 5, 3, 35);
        $this->Line(5, 26, 270, 26);
        // Título
        $this->SetFont('Arial', '', 15);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(5);
        $this->SetX(95);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'C');
        $this->SetY(15);
        $this->SetX(70);
        $this->SetFont('Arial', '', 10);
        $this->Cell(130, 5, 'CLIENTE: ' . utf8_decode($this->getClienteL()), 0, 1, 'C');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(20);
        $this->SetX(70);
        $this->Cell(130, 4, 'DIRECCION: ' . utf8_decode($this->getDireccionL()), 0, 1, 'C');
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
                $this->Image($this->getLogoCliente(), 240/* X */, 5/* Y */, 25/* W *//* H */);
            }
        }
        $this->Image(base_url() . 'img/android-icon-192x192.png', 5, 3, 25);
        $this->Line(5, 20, 270, 20);
        // Título
        $this->SetFont('Arial', '', 15);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(5);
        $this->SetX(95);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'C');
        $this->SetY(10);
        $this->SetX(95);
        $this->SetFont('Arial', '', 8);
        $this->Cell(90, 5, 'PARA: ' . utf8_decode($this->getClienteL()), 0, 1, 'C');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(15);
        $this->SetX(45);
        $this->SetFont('Arial', 'I', 8.5);
        $this->MultiCell(180, 5, 'TRABAJO: ' . strtoupper(utf8_decode($this->getConceptoL())), 1, 'C');
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

class FotosFPDLCP extends FPDF {

// Page header
    function Header() {
        $this->SetY(0);
        $this->SetX(0);
        $this->SetFillColor(210, 71, 38);
        $this->Cell(279, 30, '', 1, 0, 'C', true);
        // Logo
        $this->Image(base_url() . 'uploads/Clientes/4/PRINCIPLE.png', 225, 10, 50);
        // Título
        $this->SetFont('Arial', 'B', 25);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(15);
        $this->SetX(8);
        $this->Cell(80, 10, utf8_decode($this->getCentroCostoL()), 0, 0, 'L');

        /* CUERPO */
//        $this->SetFont('Arial', 'I', 14);
//        $this->SetTextColor(122, 122, 122);
//        $this->SetY(33);
//        $this->SetX(5);
//        $this->Cell(35, 5, utf8_decode("Estado Inicial "), 0, 1, 'L');
//        $this->SetY(33);
//        $this->SetX(145);
//        $this->Cell(35, 5, utf8_decode("Estado Final "), 0, 1, 'L');
        //$this->Line(140, 40, 140, 200);
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
    public $CentroCostoL = '';

    public function setCentroCostoL($CentroCostoL) {
        $this->CentroCostoL = $CentroCostoL;
    }

    public function getCentroCostoL() {
        return $this->CentroCostoL;
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
        $this->Cell(80, 10, utf8_decode($this->getCentroCostoL()), 0, 0, 'L');
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
    public $CentroCostoL = '';

    public function setCentroCostoL($CentroCostoL) {
        $this->CentroCostoL = $CentroCostoL;
    }

    public function getCentroCostoL() {
        return $this->CentroCostoL;
    }

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
        $this->Cell(80, 10, utf8_decode($this->getCentroCostoL()), 0, 0, 'L');
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
    public $CentroCostoL = '';

    public function setCentroCostoL($CentroCostoL) {
        $this->CentroCostoL = $CentroCostoL;
    }

    public function getCentroCostoL() {
        return $this->CentroCostoL;
    }

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

class FotosFPDLPP extends FPDF {

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
        $this->Cell(80, 10, utf8_decode($this->getCentroCostoL()), 0, 0, 'L');
        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(122, 122, 122);
        $this->SetY(45);
        $this->SetX(5);
        $this->Cell(35, 6, utf8_decode("En Proceso"), 0, 1, 'L');
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
    public $CentroCostoL = '';

    public function setCentroCostoL($CentroCostoL) {
        $this->CentroCostoL = $CentroCostoL;
    }

    public function getCentroCostoL() {
        return $this->CentroCostoL;
    }

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
