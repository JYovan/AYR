<?php

class Excel extends PHPExcel {

    public function __construct() {
        parent::__construct();
    }

}

class PDF extends FPDF {

    public $Region;
    public $Subtotal;

    function getSubtotal() {
        return $this->Subtotal;
    }

    function setSubtotal($Subtotal) {
        $this->Subtotal = $Subtotal;
    }

    function getRegion() {
        return $this->Region;
    }

    function setRegion($Region) {
        $this->Region = $Region;
    }

    function Header() {
        $this->SetFont('Arial', 'B', 7);
        $this->SetFillColor(91, 190, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(3);
        $this->SetX(135);
        $this->Cell(25, 4, utf8_decode($this->getRegion()), 'B'/* BORDE */, 0, 'C', 1);
        $this->SetY(10);
        $this->SetX(5);
        $this->SetFont('Arial', '', 7);
        $this->Cell(10, 6, utf8_decode('GPS: '), 0/* BORDE */, 0, 'L');
        $this->SetX(15);
        $this->Cell(15, 6, utf8_decode('119297'), 'B'/* BORDE */, 0, 'C', 1);
        $this->SetX(85);
        $this->Cell(35, 6, utf8_decode('NOMBRE PROVEEDOR: '), 0/* BORDE */, 0, 'L');
        $this->SetX(120);
        $this->Cell(80, 6, utf8_decode('A&R CONSTRUCCIONES SA DE CV'), 'B'/* BORDE */, 0, 'C', 1);
        $this->SetX(210);
        $this->Cell(25, 6, utf8_decode('FECHA ELABORACIÓN: '), 0/* BORDE */, 0, 'L');
        $this->SetX(245);
        $this->Cell(30, 6, Date('d/m/Y'), 'B'/* BORDE */, 1, 'C', 1);
        $this->SetFont('Arial', 'B', 7.5);
        $this->SetY(16);
        $this->SetX(155);
        $this->Cell(61, 6, 'SUBTOTAL GENERAL: $' . number_format($this->getSubtotal(), 2, ".", ","), 1/* BORDE */, 1, 'C');

        $this->AliasNbPages('{totalPages}');
        // Go to 1.5 cm from bottom
        $this->SetY(-5);
        $this->SetX(250);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Print centered page number

        $this->Cell(35, 3, utf8_decode('Pag. ' . $this->PageNo() . ' de {totalPages}'), 0, 0, 'R');

        //ENCABEZADOS DE DETALLE
        $this->SetFont('Arial', '', 6);
        $this->SetY(22);
        $this->SetX(5);
        $this->SetFillColor(91, 190, 255);
        $this->SetTextColor(0, 0, 0);
        $this->MultiCell(15, 2.65, utf8_decode('Cuenta Gasto o Inversión'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(20);
        $this->SetFillColor(54, 96, 146);
        $this->SetTextColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 6.5);
        $this->MultiCell(18, 8, utf8_decode('No Factura'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(38);
        $this->SetFillColor(91, 190, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', '', 6.5);
        $this->MultiCell(35, 8, utf8_decode('Descripción Breve'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(73);
        $this->SetFillColor(54, 96, 146);
        $this->SetTextColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 6.5);
        $this->MultiCell(18, 4, utf8_decode('Orden de Compra'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(91);
        $this->SetFillColor(54, 96, 146);
        $this->MultiCell(20, 8, utf8_decode('Aceptación'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(111);
        $this->SetFillColor(91, 190, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', '', 6.5);
        $this->MultiCell(22, 4, utf8_decode('ORDEN DE TRABAJO/TICKET'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(133);
        $this->SetFillColor(91, 190, 255);
        $this->SetTextColor(0, 0, 0);
        $this->MultiCell(22, 8, utf8_decode('ESPECIALIDAD'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(155);
        $this->MultiCell(16, 4, utf8_decode('FECHA ENTREGA'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(171);
        $this->MultiCell(11, 8, utf8_decode('Moneda'), 1/* BORDE */, 'L', 1);
        $this->SetY(22);
        $this->SetX(182);
        $this->MultiCell(17, 8, utf8_decode('Subtotal'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(199);
        $this->SetFillColor(54, 96, 146);
        $this->SetTextColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 6.5);
        $this->MultiCell(17, 8, utf8_decode('Total c/IVA'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(216);
        $this->SetFillColor(91, 190, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', '', 6.5);
        $this->MultiCell(17, 8, utf8_decode('REGIONAL'), 1/* BORDE */, 'C', 1);
        $this->SetY(22);
        $this->SetX(233);
        $this->SetFillColor(54, 96, 146);
        $this->SetTextColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 6.5);
        $this->MultiCell(42, 8, utf8_decode('Observaciones Adicionales'), 1/* BORDE */, 'C', 1);
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
        $h = 3.5 * $nb;
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
            $this->MultiCell($w, 3.5, $data[$i], 0, $a);
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
            //$this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 5, $data[$i], 0, $a);
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
