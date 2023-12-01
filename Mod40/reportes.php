<?php
require('pdf/fpdf.php');
class PDF extends FPDF{
    function Header{
	//logo
	$this->Cell(-200)
	$this->Image('img/encabezado.png',0,-10,220);
	// detalles de letra 
	$this->Ln(12);
	$this->SetFont('Arial','B',10);
	$this->Cell(-200);

	}
	function Footer{
	$this->SetFillColor(20,05,19);
	$this->React(0,278,220,30,'F');
	$this->SetY(-20);//sube las letras 
	$this->SetFont('Arial','',10);
	$this->SetTextColor(255,255,255);
	
	$this->SetX(90);
	$this->Write(5, 'Solicitamos su pago con la mayor brevedad.');
	$this->Ln();
	}
}
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',10);
	
	$pdf->SetY(50);
	$pdf->SetX(45);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(79,59,120);
	$pdf->Cell(59,9,'subdelegacion',0,0,'C',1);
	$pdf->Cell(59,9,'nss',0,0,'C',1);
	$pdf->Cell(59,9,'nombre',0,0,'C',1);
	
	include("php/dbconnect.php");
	
	
	$consulta= "Select DISTINCT * from enero where enero.nss not in (select febrero.nss from febrero)";
    $resultado= mysqli_query($conn,$consulta);
	
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFillColor(240,245,255);

    while($row = $resultado->fetch_assoc()){
	$pdf->SetX(45);
	$pdf->Cell(59,9,$row['subdelegacion'] ,0,0,'C',1);
	$pdf->Cell(59,9,$row['nss'],0,0,'C',1);
	$pdf->Cell(59,9,$row['nombre'],0,0,'C',1);

}
$pdf->Output();
?>