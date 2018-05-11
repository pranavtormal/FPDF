<?php
require('diag.php');

$pdf = new PDF_Diag();
$pdf->AddPage();

$data = array('Kids' => 1510, 'Mens' => 1010, 'Legends' => 500);

//Pie charti
$xWidth = $pdf->getWidth();
//echo $x;
$pdf->SetFont('Arial', 'BIU', 12);
//$pdf->Cell(50, 5, 'Pie Chart', 300, 80,"C");
$pdf->Ln(8);

$pdf->SetFont('Arial', '', 10);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
/*
$pdf->Cell(30, 5, 'Number of Kids:');
$pdf->Cell(15, 5, $data['Kids'], 0, 0, 'R');
$pdf->Ln();
$pdf->Cell(30, 5, 'Number of Mens:');
$pdf->Cell(15, 5, $data['Mens'], 0, 0, 'R');
$pdf->Ln();
$pdf->Cell(30, 5, 'Number of Legends:');
$pdf->Cell(15, 5, $data['Legends'], 0, 0, 'R');
$pdf->Ln();
*/
$pdf->Ln(8);

$pdf->SetXY(70, $valY);
$col1=array(91,196,135);
$col2=array(255,100,100);
$col3=array(178,178,178);
$pdf->PieChart(100, 60, $data, '%l (%v)', array($col1,$col2,$col3)); //%p for percentage
//$pdf->SetXY($valX, $valY + 40);

//Bar diagram
/*
$pdf->SetFont('Arial', 'BIU', 12);
$pdf->Cell(0, 5, '2 - Bar diagram', 0, 1);
$pdf->Ln(8);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
$pdf->BarDiagram(190, 70, $data, '%l : %v (%p)', array(255,175,100));
$pdf->SetXY($valX, $valY + 80);
*/
$pdf->Output();
?>
