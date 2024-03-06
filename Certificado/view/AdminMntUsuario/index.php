<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>JAC :: Admin Usuarios</title>
    <link rel="icon" type="image/png" href="../../JAC .png">
    <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <?php
    if($_SESSION["rol_id"]==2){
    ?>

    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Usuarios</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Usuarios</h4>
        <p class="mg-b-0">ADMINISTRACION</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Usuarios</h6>
            <p class="mg-b-30 tx-gray-600">Listado de Usuarios</p>

            <button class="btn btn-outline-primary" id="add_button" onclick="nuevo()"><i class="fa fa-plus-square mg-r-10"></i> Nuevo Registro</button>

            <button class="btn btn-outline-primary" id="btnplantilla"><i class="fa fa-gear mg-r-10"></i> Subir Plantilla</button>

            <p></p>

            <div class="table-wrapper"></div>
                <table id="usuario_data" class="table display responsive nowrap">
                <thead>
                    <tr>
                    <th class="wd-15p">Nombre</th>
                    <th class="wd-15p">Ape.Paterno</th>
                    <th class="wd-15p">Ape.Materno</th>
                    <th class="wd-15p">Correo</th>
                    <th class="wd-15p">Telefono</th>
                    <th class="wd-15p">NSS</th>
                    <th class="wd-15p">Rol</th>
                    <th class="wd-10p"></th>
                    <th class="wd-10p"></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
            </div>

        </div>
      </div>
    </div>
    <?php
    }else{ 
  ?>
    <style>
    /* Estilos para dispositivos móviles */
    @media (max-width: 1450px) {
      .container {
      padding-top: 100px;
      padding-left: 0px;
    }
    }
    @media (max-width: 950px) {
      .container {
      padding-top: 100px;
      padding-left: 20px;
    }
    }

    /* Estilos para pantallas más grandes */
    @media  (min-width: 769px) {
      .container {
      padding-top: 100px;
      padding-left: 219px;
    }
    }
    /* Estilos para pantallas más grandes */
   @media  (max-width: 980px) {
      .container {
      padding-top: 100px;
      padding-left: 10px;
    }
    }
  </style>
  <div class="container mt-5">
    <div class="alert alert-danger" role="alert">
    <h1 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> ACCESO DENEGADO</h1>
      <p>No tienes permiso para acceder a esta ventana. Por favor, ponte en contacto con el administrador si crees que esto es un error.</p>
    </div>
  </div>
  <?php
      }
    ?>

    <?php require_once("modalmantenimiento.php"); ?>
    <?php require_once("modalplantilla.php"); ?>

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="adminmntusuario.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
  </body>
</html>
<?php
  }else{
    header("Location:".Conectar::ruta()."view/404/");
  }
?>