<?php

// Optionally define the filesystem path to your system fonts
// otherwise tFPDF will use [path to tFPDF]/font/unifont/ directory
// define("_SYSTEM_TTFONTS", "C:/Windows/Fonts/");

require_once('../../libraries/fpdf/fpdf.php');


class CertificatePdf extends FPDF {

    public function __construct($pos, $unit, $type) {
        parent::__construct($pos, $unit, $type);
    
        $this->AddPage();
        $this->SetFont('Arial','B',16);
        
        

    }

    public function renderLogo($logo, $x, $y, $res=''){
        $this->Image($logo, $x, $y, $res);
    }

    public function renderInstitution($ins) {
        $this->MultiCell(0,45,'',$this->verBorders);
        $this->SetFont('Arial', 'B', 24);
        $this->MultiCell(0,10, utf8_decode($ins[0]), $this->verBordes, 'C');
        $this->SetFont('Arial', 'I', 18);
        $this->MultiCell(0,10, utf8_decode($ins[1]), $this->verBordes, 'C');

    }


    public function renderCampo($objeto, $etiqueta) {

        $this->MultiCell(0,5,'',$this->verBorders);
        $this->SetFont('Arial', 'BI', 12);
        $this->MultiCell(0,10, utf8_decode($etiqueta[0]), $this->verBordes, 'C');
        $this->SetFont('Arial', 'B', 20);
        $this->MultiCell(0,10, utf8_decode($objeto[0]), $this->verBordes, 'C');
        $this->SetFont('Arial', "I", 16);
        $this->MultiCell(0,10, utf8_decode($etiqueta[1].' '.$objeto[1]), $this->verBordes, 'C');

    }

    public function sangria(){
        $this->Cell(5,5,'', $this->verBorders);
        
    }

    public function renderAutoridad($objeto, $etiqueta) {
        
        $this->sangria();
        $this->SetFont('Arial', 'BI', 10);
        $this->Cell(30,10, utf8_decode($etiqueta[0]) , $this->verBorders, 1);
        $this->sangria();
        $this->SetFont('Arial', 'BI', 14);
        $this->Cell(30,10,utf8_decode($objeto[0]), $this->verBorders, 1);
        $this->sangria();
        $this->SetFont('Arial', 'BI', 12);
        $this->Cell(30,5,utf8_decode($objeto[1]), $this->verBorders);


    }





}





?>