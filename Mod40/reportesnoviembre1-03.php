<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página

function Header()
{
    // Logo
    $this->Cell(-200);
    $this->Image('pdf/img/logo encabezado.png',0,0,200);
    $this->Ln(20);
    
    
}


// Pie de página
function Footer()
{
   // Logo
    $this->Cell(-200);
    $this->Image('pdf/img/pie de pagina.png',0,270,210);
	
    
}

}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();



$pdf->SetFont('Arial','',10);
$pdf-> Cell(160,10, 'Orizaba, Ver a',0,0,'R',0);
$pdf->Cell(20,10,date('d/m/Y '),0,1,'R',0);
$pdf->SetFont('Arial','',11);
$pdf-> Cell(63,10, 'Memorandum Interno N. ',0,1,'C',0);
$pdf->SetFont('Arial','',11);
$pdf-> Cell(26,10, 'De:',0,0,'C',0);
$pdf->SetFont('Arial','B',11);
$pdf-> Cell(48,10, 'Jefe de Departamento de Cobranza ',0,0,'C',0);
$pdf->SetFont('Arial','',11);
$pdf-> Cell(-120,20,'Para:',0,0,'C',0);
$pdf->SetFont('Arial','B',11);
$pdf-> Cell(217,20, 'Jefe de Departamento de Afiliacion y Cobranza',0,1,'C',0);
$pdf->SetFont('Arial','',10);
$pdf-> Cell(31,-5, 'Asunto:',0,0,'C',0);
$pdf->SetFont('Arial','B',10);
$pdf-> Cell(10,-5, 'El que se indica',0,1,'C',0);
$pdf->SetFont('Arial','',10);
$pdf-> Cell(34,11, 'Prioridad:',0,0,'C',0);
$pdf->SetFont('Arial','B',10);
$pdf-> Cell(-15,11, '1',0,2,'C',0);
$pdf->SetFont('Arial','',10);
$pdf-> Cell(120,10, 'Por medio del presente le informo el listado de personas o de asegurados en MODALIDAD 40 que causaron',0,0,'C',0);
$pdf->SetFont('Arial','',10);
$pdf-> Cell(-265,20, 'mora por 1 mes.',0,1,'C',0);
$pdf->SetFont('Arial','',10);
$pdf-> Cell(40,40, 'Atentamente',0,0,'C',0);
$pdf->SetFont('Arial','',10);
$pdf-> Cell(-15,50, 'Seguridad y Solidaridad Social',0,0,'C',0);
$pdf->SetFont('Arial','B',10);
$pdf-> Cell(13,80, 'Mtro. Erick Sanchez Lucho.',0,0,'C',0);
$pdf->SetFont('Arial','B',10);
$pdf-> Cell(38,90, 'Titular de la Jefatura de Servicios de Afiliacion y Cobranza.',0,0,'C',0);

$pdf->SetFont('Arial','',10);
$pdf->SetY(155);
$pdf->SetX(40);
$pdf->SetTextColor (255,255,255);
$pdf->SetFillColor (8,48,12);


$pdf->Cell(50,9, 'nss', 0 ,0, 'C',1);
$pdf->Cell(90,9, 'nombre', 0 ,1, 'C',1);



include("php/dbconnect.php");

$consulta = "Select DISTINCT * from octubre where octubre.nss not in (select noviembre.nss from noviembre) HAVING subdelegacion=03;";
$resultado = mysqli_query($conn,$consulta);


$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255,255,255);

while($row = $resultado->fetch_assoc()){
  
    
	$pdf->SetX(40);
  
    $pdf->Cell(50,9, $row['nss'], 0 ,0, 'C',1);
    $pdf->Cell(90,9, $row['nombre'], 0 ,1, 'C',1);
	
   
  
}




$pdf->Output();
