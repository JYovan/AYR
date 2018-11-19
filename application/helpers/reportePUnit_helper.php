<?php

class PDFClientePU extends FPDF {

    public $cliente;
    public $sucursal;
    public $desc_concepto;
    public $unidad;

    function getDesc_concepto() {
        return $this->desc_concepto;
    }

    function getUnidad() {
        return $this->unidad;
    }

    function setDesc_concepto($desc_concepto) {
        $this->desc_concepto = $desc_concepto;
    }

    function setUnidad($unidad) {
        $this->unidad = $unidad;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getSucursal() {
        return $this->sucursal;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setSucursal($sucursal) {
        $this->sucursal = $sucursal;
    }

    function Header() {


        $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
        /* Imagen de reporte visita previa */
        if (!empty($_SESSION["LOGO"])) {
            //LogoCliente
            $ext = pathinfo($_SESSION["LOGO"], PATHINFO_EXTENSION);

            if (in_array($ext, $ExtensionesPermitidas)) {
                $this->Image($_SESSION["LOGO"], 5/* X */, 3/* Y */, 23/* W *//* H */);
            }
        } else {
            $this->Image(base_url() . 'img/logo.png', 5, 3, 23);
        }

        $this->SetY(3);
        $this->SetX(35);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(80, 4, utf8_decode('TARJETA DE PRECIOS UNITARIOS'), 0/* BORDE */, 0, 'L');
        $this->SetX(155);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(25, 4, utf8_decode('FECHA: '), 0/* BORDE */, 0, 'R');
        $this->SetX(180);
        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 4, Date('d/m/Y'), 'B'/* BORDE */, 1, 'C');
        $this->SetX(35);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 4, utf8_decode('CLIENTE: '), 0/* BORDE */, 0, 'L');

        $this->SetX(55);
        $this->SetFont('Arial', '', 8);
        $this->Cell(20, 4, utf8_decode($this->getCliente()), 0/* BORDE */, 1, 'L');

        $this->SetX(35);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 4, utf8_decode('SUCURSAL: '), 0/* BORDE */, 0, 'L');

        $this->SetX(55);
        $this->SetFont('Arial', '', 8);
        $this->Cell(20, 4, utf8_decode($this->getSucursal()), 0/* BORDE */, 0, 'L');


        $this->SetX(155);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(25, 4, utf8_decode('UN: '), 0/* BORDE */, 0, 'R');

        $this->SetX(180);
        $this->SetFont('Arial', '', 8);
        $this->Cell(25, 4, utf8_decode($this->getUnidad()), 'B'/* BORDE */, 1, 'C');



        $this->SetX(35);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 4, utf8_decode('CONCEPTO: '), 0/* BORDE */, 0, 'L');

        $this->SetX(55);
        $this->SetFont('Arial', '', 7);
        $this->MultiCell(110, 4, utf8_decode($this->getDesc_concepto()), 1/* BORDE */, 'J');


        $Y_INI = $this->GetY() + 2;
        $this->SetFont('Arial', 'B', 9);
        $this->SetY($Y_INI);
        $this->SetX(5);
    }

    function Footer() {
        $this->AliasNbPages('{totalPages}');
        // Go to 1.5 cm from bottom
        $this->SetY(-5);
        $this->SetX(188);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Print centered page number
        $this->Cell(35, 3, utf8_decode('Pag. ' . $this->PageNo() . ' de {totalPages}'), 0, 0, 'R');
    }

    var $widths;
    var $aligns;
    var $x;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function SetMarginLeft($x) {
        //Set margin left where the row inits
        $this->x = $x;
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
            //$this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 4, $data[$i], 'B', $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function RowNoBorder($data) {
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
            //$this->Rect($x, $y, $w, $h);
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

}

class PDF extends FPDF {

    public $cliente;
    public $sucursal;
    public $desc_concepto;
    public $unidad;

    function getDesc_concepto() {
        return $this->desc_concepto;
    }

    function getUnidad() {
        return $this->unidad;
    }

    function setDesc_concepto($desc_concepto) {
        $this->desc_concepto = $desc_concepto;
    }

    function setUnidad($unidad) {
        $this->unidad = $unidad;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getSucursal() {
        return $this->sucursal;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setSucursal($sucursal) {
        $this->sucursal = $sucursal;
    }

    function Header() {

        $this->Image(base_url() . 'img/logo.png', 5, 3, 23);

        $this->SetY(3);
        $this->SetX(35);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(80, 4, utf8_decode('TARJETA DE PRECIOS UNITARIOS'), 0/* BORDE */, 0, 'L');
        $this->SetX(155);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(25, 4, utf8_decode('FECHA: '), 0/* BORDE */, 0, 'R');
        $this->SetX(180);
        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 4, Date('d/m/Y'), 'B'/* BORDE */, 1, 'C');
        $this->SetX(35);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 4, utf8_decode('CLIENTE: '), 0/* BORDE */, 0, 'L');

        $this->SetX(55);
        $this->SetFont('Arial', '', 8);
        $this->Cell(20, 4, utf8_decode($this->getCliente()), 0/* BORDE */, 1, 'L');

        $this->SetX(35);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 4, utf8_decode('SUCURSAL: '), 0/* BORDE */, 0, 'L');

        $this->SetX(55);
        $this->SetFont('Arial', '', 8);
        $this->Cell(20, 4, utf8_decode($this->getSucursal()), 0/* BORDE */, 0, 'L');


        $this->SetX(155);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(25, 4, utf8_decode('UN: '), 0/* BORDE */, 0, 'R');

        $this->SetX(180);
        $this->SetFont('Arial', '', 8);
        $this->Cell(25, 4, utf8_decode($this->getUnidad()), 'B'/* BORDE */, 1, 'C');



        $this->SetX(35);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 4, utf8_decode('CONCEPTO: '), 0/* BORDE */, 0, 'L');

        $this->SetX(55);
        $this->SetFont('Arial', '', 7);
        $this->MultiCell(110, 4, utf8_decode($this->getDesc_concepto()), 1/* BORDE */, 'J');


        $Y_INI = $this->GetY() + 2;
        $this->SetFont('Arial', 'B', 9);
        $this->SetY($Y_INI);
        $this->SetX(5);
    }

    function Footer() {
        $this->AliasNbPages('{totalPages}');
        // Go to 1.5 cm from bottom
        $this->SetY(-5);
        $this->SetX(188);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Print centered page number
        $this->Cell(35, 3, utf8_decode('Pag. ' . $this->PageNo() . ' de {totalPages}'), 0, 0, 'R');
    }

    var $widths;
    var $aligns;
    var $x;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function SetMarginLeft($x) {
        //Set margin left where the row inits
        $this->x = $x;
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
            //$this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 4, $data[$i], 'B', $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function RowNoBorder($data) {
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
            //$this->Rect($x, $y, $w, $h);
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

}
