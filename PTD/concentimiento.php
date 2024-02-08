<?php
setlocale(LC_CTYPE, 'es_MX');
setlocale(LC_TIME, 'spanish'); // Español para el mes
include "fpdf/fpdf.php";

session_start();


$pdf = new FPDF($orientation='P');

include "connect.db.php";
$sql = "select * from person where id=".$_GET['id'];
$con = connect_db();
$query = $con->query($sql);
$data = null;
while($r= $query->fetch_object()){ $data = $r; }

$pdf->AddPage();
// Agregar imagen de fondo
$pdf->Image('plantilla.jpg', 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight()); // Cambia la ruta de la imagen y ajusta el tamaño según sea necesario

$pdf->SetFont('Arial','B',8);    //Letra Arial, negrita (Bold), tam. 20  //Letra Arial, negrita (Bold), tam. 20


//Fecha DIA:
$pdf->setY(21.4);
$pdf->setX(150);
$pdf->Cell(5, 10, date('d'));

//Fecha MES:
$pdf->setY(21.4);
$pdf->setX(159);
$pdf->Cell(5, 10, strftime('%B'));

//Fecha AÑO:
$pdf->setY(21.4);
$pdf->setX(175);
$pdf->Cell(5, 10, date('Y'));

//Empleado comisionado:
$pdf->setY(49);
$pdf->setX(52);
$pdf->Cell(5,10,utf8_decode(''.$data->name));

//Matricula:
$pdf->setY(54);
$pdf->setX(31);
$pdf->Cell(5,10,''.$data->Matricula);

//Grupo Jerarquico:
$pdf->setY(54);
$pdf->setX(91);
$pdf->Cell(5,10,': '.$data->GrupoJ);

//Tipo de contratacion:
$pdf->setY(49);
$pdf->setX(153);
$pdf->Cell(5,10,utf8_decode(''.$data->Tipo_Contratacion));

//TELEFONO DE OFICINA
$pdf->setY(54);
$pdf->setX(160);
$pdf->Cell(5,10,''.$data->phone );

//LUGAR DE LA COMISON
$pdf->setY(67);
$pdf->setX(55);
$pdf->Cell(5,10,utf8_decode(''.$data->Lugar_Comision));


//PERIODO
$pdf->setY(72.5);
$pdf->setX(27);
$pdf->Cell(5,10,''.$data->Periodo);

//TOTAL DE DIAS
$pdf->setY(72);
$pdf->setX(165);
$pdf->Cell(5,10,''.$data->Total_dias);

//MEDIO DE TRANSPORTE
$pdf->setY(77.4);
$pdf->setX(50);
$pdf->Cell(5,10,utf8_decode(''.$data->Transporte));

//MOTIVO DE LA COMISION (Letra Arial 10)
$pdf->SetFont('Arial','B',10);  

$pdf->setY(62.5);
$pdf->setX(52);
$pdf->Cell(5,10,utf8_decode(''.$data->Motivo));

/*
$pdf->setY(145);
$pdf->setX(80);
$pdf->Cell(5,10,'CORREO ELECTRONICO : '.$data->email );
*/

$pdf->setY(271);
$pdf->setX(97);
$pdf->SetFont('Arial', '', 8); // Aquí estableces el tamaño de fuente deseado, en este caso, 8
$pdf->Cell(5, 0, 'FIRMADO EL DIA: '.$data->created_at);

if($data->firma!=""){
$pdf->Image('firmas/'.$data->firma, 140, 230,  60, 50);
}


$pdf->output();
?>
