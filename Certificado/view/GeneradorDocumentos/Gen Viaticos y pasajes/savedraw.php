<?php
//print_r($_POST);
$img = $_POST['base64'];
$img = str_replace('data:image/png;base64,', '', $img);
$fileData = base64_decode($img);
$fileName = uniqid().'.png';

file_put_contents("./firmas/".$fileName, $fileData);


$name = $_POST["name"];
$Matricula = $_POST["Matricula"];
$GrupoJ = $_POST["GrupoJ"];
$Tipo_Contratacion = $_POST["Tipo_Contratacion"];
$phone = $_POST["phone"];
$Lugar_Comision = $_POST["Lugar_Comision"];
$Periodo = $_POST["Periodo"];
$Total_dias = $_POST["Total_dias"];
$Transporte = $_POST["Transporte"];
$Motivo = $_POST["Motivo"];


include "connect.db.php";
$con = connect_db();

$sql = "insert into person(name, Matricula, GrupoJ, Tipo_Contratacion, phone, Lugar_Comision, Periodo, Transporte, Total_dias, Motivo, firma, created_at) value ";
$sql.= " ( \"$name\", \"$Matricula\", \"$GrupoJ\", \"$Tipo_Contratacion\", \"$phone\", \"$Lugar_Comision\", \"$Periodo\", \"$Transporte\", \"$Total_dias\", \"$Motivo\", \"$fileName\", NOW())";

//print_r($con);

$con->query($sql);

//cambiar por ruta del servidor
header("Location: http://localhost:90/IMSS%20JAC/Certificado/view/GeneradorDocumentos/Gen%20Viaticos%20y%20pasajes/newsign.php");

?>