<?php
  // Lógica de generación de viáticos

  // Incluir el archivo de conexión si es necesario
  require_once("../../config/conexion.php");

  // Verificar si el usuario ha iniciado sesión
  if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once("../html/MainHead.php"); ?>
  <title>Generador de Viáticos</title>
</head>
<body>

<?php require_once("../html/MainMenu.php"); ?>

<?php require_once("../html/MainHeader.php"); ?>

<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Generador de Viáticos</h6>
  </div>
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h1 class="tx-gray-800 mg-b-5">GENERADOR DE PLIEGO DE COMISION</h1>
    <div class="button-container bg-white p-3 rounded">
      <a href="./Gen Viaticos y pasajes/newsign.php" class="btn btn-outline-primary mr-2">Nueva Firma</a>
      <a href="./Gen Viaticos y pasajes/ver-documentos.php" class="btn btn-outline-primary">Ver Documentos Firmados</a>
    </div>
  </div>
</div>

<?php require_once("../html/MainJs.php"); ?>

</body>
</html>

<?php
  } else {
    // Si no ha iniciado sesión, redireccionar a la página de error 404
    header("Location:".Conectar::ruta()."view/404/");
  }
?>
