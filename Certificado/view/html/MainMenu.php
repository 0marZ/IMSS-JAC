<div class="br-logo">
    <a href="../UsuHome/"><img src="../../JAC_Logo3.png" class="wd-100" alt="Logotipo"></a>
</div>

<div class="br-sideleft overflow-y-auto">
  <label class="sidebar-label pd-x-15 mg-t-20">Menu</label>
  <div class="br-sideleft-menu">

    <a href="../UsuHome/" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon ion-ios-home tx-22"></i>
        <span class="menu-item-label">Inicio</span>
      </div>
    </a>

    <?php
      if($_SESSION["rol_id"]==1){
        ?>
          <a href="../GeneradorDocumentos/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-android-document tx-24"></i>
              <span class="menu-item-label">Generador de documentos</span>
            </div>
          </a>
          <a href="../SubirDocumento/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-android-document tx-24"></i>
              <span class="menu-item-label">Subir Documento</span>
            </div>
          </a>
        <?php
      }else{
        ?>
          <a href="../AdminMntUsuario/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-android-contacts tx-24"></i>
              <span class="menu-item-label">Admin. Usuarios</span>
            </div>
          </a>
 <!-- Para futuras implementaciones 
          <a href="" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">TEXTO</span>
            </div>
          </a>
          
          <a href="../UsuCurso/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mis Cursos</span>
            </div>
          </a>

          <a href="../AdminMntInstructor/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Instructor</span>
            </div>
          </a>

          <a href="../AdminMntCategoria/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Categoria</span>
            </div>
          </a>

          <a href="../AdminDetalleCertificado/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Detalle Certificado</span>
            </div>
          </a>
-->
          <a href="../VerDocGenerados/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-android-folder-open tx-24"></i>
              <span class="menu-item-label">Documentos generados</span>
            </div>
          </a>
          <a href="../GeneradorDocumentos/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-android-document tx-24"></i>
              <span class="menu-item-label">Generador de documentos</span>
            </div>
          </a>
        <?php
      }
    ?>


    <a href="../UsuPerfil/" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-gear-outline tx-20"></i>
        <span class="menu-item-label">Perfil</span>
      </div>
    </a>

    <a href="../html/Logout.php" onclick="confirmarAccion(event)" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-power tx-20"></i>
        <span class="menu-item-label">Cerrar Sesion</span>
      </div>
    </a>
      
    <style>
    .center-img {
    text-align: center;
    }
    .hidden {
        display: none;
    }

    </style>
    <div id="logo-container" class="center-img" style="margin-top: 100px;">
        <img src="../../VERSUR.png" class="wd-90 rounded-circle" alt="Logo IMSS">
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Obtiene el contenedor de la imagen
        var logoContainer = document.getElementById('logo-container');

        // Agrega un event listener para detectar el clic en el menú desplegable
        document.querySelector('.br-sideleft').addEventListener('transitionend', function (event) {
            // Verifica si la barra lateral se ha cerrado completamente
            if (event.propertyName === 'width' && window.getComputedStyle(event.target).width === '60px') {
                // Oculta la imagen si la barra lateral está cerrada
                logoContainer.classList.add('hidden');
            } else {
                // Muestra la imagen si la barra lateral está abierta
                logoContainer.classList.remove('hidden');
            }
        });
    });
</script>

<script>
    function confirmarAccion(event) {
        if (confirm("¿Desea finalizar su sesión y guardar los cambios realizados hasta el momento?")) {
            // Si el usuario hace clic en "Aceptar", se ejecuta la acción del enlace
            window.location.href = "../VerDocGenerados/";
        } else {
            // Si el usuario hace clic en "Cancelar", se cancela la acción predeterminada
            event.preventDefault();
        }
    }
</script>

  </div>
</div>

