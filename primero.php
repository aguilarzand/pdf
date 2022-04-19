<?php
require('fpdf184/fpdf.php');
$pdf = new FPDF();
$pdf -> addPage();
$pdf -> setXY(5,5);
$pdf -> setFont('Arial','B',16);
$pdf -> cell(40,10,"Primer PDF");
$pdf -> Ln();
$pdf -> setFont('Times','',14);
$pdf -> cell(40,10,"Angie Aguilar");
$pdf -> Output();
?>
