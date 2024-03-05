<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>JAC :: Perfil</title>
    <link rel="icon" type="image/png" href="../../JAC .png">
    <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Perfil</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Perfil</h4>
        <p class="mg-b-0">Pantalla Perfil</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Perfil</h6>
          <p class="mg-b-30 tx-gray-600">Actualize sus datos</p>

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="usu_nom" id="usu_nom" placeholder="Nombre" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Apellido Paterno: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="usu_apep" id="usu_apep" placeholder="Apellido Paterno">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Apellido Materno: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="usu_apem" id="usu_apem" placeholder="Apellido Materno">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Correo Electronico: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="usu_correo" id="usu_correo" readonly>
                </div>
              </div>
              <div class="col-lg-6">

                <div class="form-group">
                    <label class="form-control-label">Contraseña: <span class="tx-danger">*</span></label>
                    <div class="input-group">
                        <input class="form-control" type="password" name="usu_pass" id="usu_pass" placeholder="Ingrese Contraseña"style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" >
                        <div class="input-group-prepend" style="margin-left: 10px;"> <!-- Ajusta el valor del margen derecho aquí -->
                            <span class="input-group-text input-group-text-lg align-items-center" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <style>
                    /* Icono del ojo */
                    .input-group-text-lg {
                        font-size: 1.5rem; 
                        margin-top: 5px; 
                    }
                </style>

            </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sexo: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" name="usu_sex" id="usu_sex" data-placeholder="Seleccione">
                    <option label="Seleccione"></option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="usu_telf" id="usu_telf" placeholder="Ingrese Telefono">
                </div>
              </div>
            </div>
            <div class="col-lg-10">
              <div class="form-group">
                  <label style="font-size: 18px;" class="form-control-label" >Foto de Perfil:</label>
                  <img style="margin-top: 25px;" src="../<?php echo $_SESSION['usu_imagen']; ?>" class="wd-180 rounded-circle" alt="Foto Perfil">
                  <p style="margin-top: 30px;font-size: 16px;">Si requieres actualizar la imagen, acude a la ADMINISTRACIÓN</p>
              </div>
          </div>
<!-- Implementacion de camara 
          <div class="col-lg-10">
              <div class="form-group">
                  <label class="form-control-label">Foto de Perfil:</label>
                  <video id="video" width="400" height="300" autoplay></video>
                  <button id="capture-btn" class="btn btn-primary">Tomar Foto</button>
                  <canvas id="canvas" width="400" height="300"></canvas>
                  <button id="save-btn" class="btn btn-success">Guardar Foto</button>
              </div>
          </div>
-->
            <div class="form-layout-footer">
              <button class="btn btn-info" id="btnactualizar">Actualizar</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="usuperfil.js"></script>
    <script>
    document.getElementById("togglePassword").addEventListener("click", function() {
        const passwordInput = document.getElementById("usu_pass");
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);
    });
</script>
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."view/404/");
  }
?>

