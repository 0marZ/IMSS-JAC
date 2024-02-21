<?php
  // Lógica de generación de viáticos

  // Incluir el archivo de conexión si es necesario
  require_once("../../../config/conexion.php");

  // Verificar si el usuario ha iniciado sesión
  if(isset($_SESSION["usu_id"])){
?>
<?php
setlocale(LC_CTYPE, 'es_MX');
setlocale(LC_TIME, 'spanish'); // Español para el mes
include "fpdf/fpdf.php";



$pdf = new FPDF($orientation='P');

include "connect.db.php";
$sql = "select * from viaticos where id=".$_GET['id'];
$con = connect_db();
$query = $con->query($sql);
$data = null;
while($r= $query->fetch_object()){ $data = $r; }

$pdf->AddPage();
// Agregar imagen de fondo
$pdf->Image('Plantilla/plantilla.jpg', 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight()); // Cambia la ruta de la imagen y ajusta el tamaño según sea necesario

$pdf->SetFont('Arial','B',9);    //Letra Arial, negrita (Bold), tam. 20  //Letra Arial, negrita (Bold), tam. 20

//Grupo Jerarquico:
$pdf->setY(79);
$pdf->setX(15);
$pdf->Cell(5,10,''.$data->GrupoJ);

//Matricula:
$pdf->SetFont('Arial','B',12);
$pdf->setY(79);
$pdf->setX(31);
$pdf->Cell(5,10,''.$data->Matricula);

//Empleado comisionado:  Falta corregir importando los datos individuales de nombre y apellidos paterno y materno
$pdf->SetFont('Arial','B',12); // Establece la fuente y el tamaño

    // Divide el nombre en palabras
    $words = explode(' ', $data->name);

    // Imprime cada palabra con un espacio adicional entre ellas
    foreach ($words as $index => $word) {
        if ($index > 0) {
            $pdf->Cell(-44, 5, ' ', 0, 0, 'C'); // Agrega un espacio adicional entre palabras
        }
        $pdf->Cell(70, 10, utf8_decode($word), 0, 0, 'C'); // Imprime la palabra
    }

    $pdf->Ln(); // Agrega un salto de línea al final

//Tipo de contratacion:
$pdf->SetFont('Arial','B',9);
$pdf->setY(79);
$pdf->setX(180);
$pdf->Cell(5,10,utf8_decode(''.$data->Tipo_Contratacion));

//LUGAR DE LA COMISON
$pdf->setY(98);
$pdf->setX(37);
$pdf->Cell(5,10,utf8_decode(''.$data->Lugar_Comision));

//MEDIO DE TRANSPORTE
$pdf->SetFont('Arial','',10); // Restablece la fuente y el tamaño
if(isset($data->Transporte)) {
    switch ($data->Transporte) {
        case 'autobus':
            $pdf->SetFont('Arial','B',18);
            $pdf->setY(136.2);
            $pdf->setX(18);
            $pdf->Cell(0,10,'X',0,1);
            break;
        case 'vehiculo_particular':
            $pdf->SetFont('Arial','B',18);
            $pdf->setY(136.2);
            $pdf->setX(51);
            $pdf->Cell(0,10,'X',0,1);
            $pdf->SetFont('Arial','',9);
            $pdf->setY(140.9);
            $pdf->setX(58);
            $pdf->Cell(5,10,utf8_decode('ACOMPAÑANTE'));
            break;
        case 'vehiculo_oficial':
            $pdf->SetFont('Arial','B',18);
            $pdf->setY(136.2);
            $pdf->setX(88);
            $pdf->Cell(0,10,'X',0,1);
            break;
        case 'avion':
            $pdf->SetFont('Arial','B',18);
            $pdf->setY(136.2);
            $pdf->setX(139);
            $pdf->Cell(0,10,'X',0,1);
            break;
    }
} else {
    $pdf->setY(200);
    $pdf->setX(50);
    $pdf->Cell(0,10,'Tipo de transporte',0,1);
}

//MOTIVO DE LA COMISION (Letra Arial 10)
$pdf->SetFont('Arial','B',11);  

$pdf->setY(87);
$pdf->setX(63);
$pdf->Cell(0, 10, utf8_decode(''.$data->Motivo), 0, 1, 'C');


$pdf->setY(266);
$pdf->setX(97);
$pdf->SetFont('Arial', '', 8); // Aquí estableces el tamaño de fuente deseado, en este caso, 8
$pdf->Cell(5, 0, 'FIRMADO EL DIA: '.$data->created_at);

if($data->firma!=""){
$pdf->Image('C:\xampp\htdocs\IMSS JAC\Certificado\view\GeneradorDocumentos\Gen Viaticos y pasajes\firmas\\'.$data->firma, 140, 243,  60, 50);
}


$pdf->output();
?>
<?php
  } else {
    // Si no ha iniciado sesión, redireccionar a la página de error 404
    header("Location:".Conectar::ruta()."view/404/");
  }
?>
