<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>
    <title>Dashboard PTD</title>
    <link rel="icon" type="image/png" href="../../JAC .png">
  </head>

  <body>
    <?php require_once("../html/MainMenu.php"); ?>
    <?php require_once("../html/MainHeader.php"); ?>
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Inicio</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Inicio</h4>
        <p class="mg-b-0">Dashboard</p>
      </div>
      <!-- Contenido del proyecto -->
      <div class="br-pagebody mg-t-5 pd-x-30">

<!-- Resumen de total de cursos -->
<div class="row row-sm">
  <div class="col-sm-6 col-xl-3">
    <div class="bg-success rounded overflow-hidden">
      <div class="pd-25 d-flex align-items-center">
        <i class="ion-clipboard tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Inicidencias</p>
          <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1" id="lbltotal"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Nuevo cuadro de información -->
  <div class="col-sm-6 col-xl-3">
    <div class="bg-info rounded overflow-hidden">
      <div class="pd-25 d-flex align-items-center">
        <i class="ion-briefcase tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Trabajando</p>
          <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1" id="lblnuevainfo"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Otro nuevo cuadro de información -->
  <div class="col-sm-6 col-xl-3">
    <div class="bg-warning rounded overflow-hidden">
      <div class="pd-25 d-flex align-items-center">
        <i class="ion-android-laptop tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total de trabajadores PTD</p>
          <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1" id="lblotrainfo"></p> 
        </div>
      </div>
    </div>
  </div>
</div>

        

        <!-- Resumen top 10 cursos -->
        <div class="row row-sm mg-t-20">
          <div class="col-12">
            <div class="card pd-0 bd-0 shadow-base">
              <div class="pd-x-30 pd-t-30 pd-b-15">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Top Ultimos Cursos</h6>
                    <p class="mg-b-0">Aqui podra visualizar los ultimos 10 Certificados</p>
                  </div>
                </div>
              </div>
              <div class="pd-x-15 pd-b-15">
                <div class="table-wrapper">
                  <table id="cursos_data" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Curso</th>
                        <th class="wd-15p">Fecha Inicio</th>
                        <th class="wd-20p">Fecha Fin</th>
                        <th class="wd-15p">Instructor</th>
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
        </div>

      </div>
    </div>
    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="usuhome.js"></script>
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."404.html");
  }
?>
