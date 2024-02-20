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
  <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>
  <title>Generador de Documentos</title>
  <link rel="icon" type="image/png" href="../../JAC .png">
</head>
<body>

<?php require_once("../html/MainMenu.php"); ?>

<?php require_once("../html/MainHeader.php"); ?>

<div class="br-mainpanel">
  <div class="br-pageheader pd-y-80 pd-l-20" style="margin-bottom: -70px;">
    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">GENERADOR DE DOCUMENTOS</h6>
  </div>
  <div class="br-pageheader pd-y-0 pd-l-20" style="margin-bottom: -15px;">
    <h6 class="tx-gray-600 tx-uppercase tx-bold tx-10">DOCUMENTOS</h6>
  </div>
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    
    <div class="button-container bg-white p-3 rounded">
    <h1 class="tx-gray-800 mg-b-20 tx-30">SELECCIONA EL DOCUMENTO A GENERAR</h1>
      <a href="./Gen Viaticos y pasajes/newsign.php" class="btn btn-outline-primary mr-2"> <i class="fa-solid fa-file"></i>  Nuevo VIATICOS Y PASAJES</a>
    </div>
    <div class="button-container bg-white p-3 rounded">
      <a href="./Gen Pliego Comision/newsign.php" class="btn btn-outline-primary mr-2"> <i class="fa-solid fa-file"></i>  Nueva PLIEGO DE COMISION</a>
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
