<?php

class PDF extends FPDF {

    public $Region;

    function getRegion() {
        return $this->Region;
    }

    function setRegion($Region) {
        $this->Region = $Region;
    }

    function Header() {

        $this->Image(base_url() . 'img/logo.png', 5, 3, 23);

        $this->SetY(3);
        $this->SetX(210);
        $this->SetFont('Arial', 'B', 7.5);
        $this->Cell(25, 4, utf8_decode('REGION : '), 0/* BORDE */, 0, 'R');
        $this->SetY(3);
        $this->SetX(245);
        $this->SetFont('Arial', '', 7.5);
        $this->Cell(30, 4, utf8_decode($this->getRegion()), 'B'/* BORDE */, 1, 'C');
        $this->SetX(95);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(80, 4, utf8_decode('ANTIGÜEDAD DE SALDOS'), 'B'/* BORDE */, 0, 'C');
        $this->SetX(210);
        $this->SetFont('Arial', 'B', 7.5);
        $this->Cell(25, 4, utf8_decode('FECHA : '), 0/* BORDE */, 0, 'R');
        $this->SetX(245);
        $this->SetFont('Arial', '', 7.5);
        $this->Cell(30, 4, Date('d/m/Y'), 'B'/* BORDE */, 1, 'C');

        $this->AliasNbPages('{totalPages}');
        // Go to 1.5 cm from bottom
        $this->SetY(-5);
        $this->SetX(250);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Print centered page number

        $this->Cell(35, 3, utf8_decode('Pag. ' . $this->PageNo() . ' de {totalPages}'), 0, 0, 'R');

        //ENCABEZADOS DE DETALLE
        $Y_INI = 20;
        $this->SetFont('Arial', 'B', 8);
        $this->SetY($Y_INI);
        $this->SetX(5);
        $this->MultiCell(15, 4, utf8_decode('Folio Int.'), 'B'/* BORDE */, 'L');
        $this->SetY($Y_INI);
        $this->SetX(20);
        $this->MultiCell(25, 4, utf8_decode('Folio Cliente'), 'B'/* BORDE */, 'L');
        $this->SetY($Y_INI);
        $this->SetX(45);
        $this->MultiCell(80, 4, utf8_decode('Cliente-Sucursal'), 'B'/* BORDE */, 'L');

        $this->SetY($Y_INI);
        $this->SetX(125);
        $this->MultiCell(20, 4, utf8_decode('Saldo'), 'B'/* BORDE */, 'R');
        $this->SetY($Y_INI);
        $this->SetX(145);
        $this->MultiCell(20, 4, utf8_decode('1 a 15'), 'B'/* BORDE */, 'R');
        $this->SetY($Y_INI);
        $this->SetX(165);
        $this->MultiCell(20, 4, utf8_decode('16 a 30'), 'B'/* BORDE */, 'R');
        $this->SetY($Y_INI);
        $this->SetX(185);
        $this->MultiCell(20, 4, utf8_decode('31 a 45'), 'B'/* BORDE */, 'R');
        $this->SetY($Y_INI);
        $this->SetX(205);
        $this->MultiCell(20, 4, utf8_decode('46 a 60'), 'B'/* BORDE */, 'R');
        $this->SetY($Y_INI);
        $this->SetX(225);
        $this->MultiCell(20, 4, utf8_decode('61 a 120'), 'B'/* BORDE */, 'R');
        $this->SetY($Y_INI);
        $this->SetX(245);
        $this->MultiCell(30, 4, utf8_decode('Mas de 120'), 'B'/* BORDE */, 'R');
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
