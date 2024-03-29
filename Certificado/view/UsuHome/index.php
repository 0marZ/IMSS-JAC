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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
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
          <a class="breadcrumb-item" href="#">Inicio</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Inicio</h4>
        <p class="mg-b-0">Dashboard</p>
      </div>
      <!-- Indicadores de datos rapidos -->
      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm mg-t-20">
          <div class="col-sm-6 col-xl-3 mg-t-20">
            <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                <div class="d-flex align-items-center">
                  <i class="ion-clipboard tx-60 lh-0 tx-success op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Inicidencias</p>
                    <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lbltotal">0</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Datos 2 -->
          <div class="col-sm-6 col-xl-3 mg-t-20">
            <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                <div class="d-flex align-items-center">
                  <i class="ion-briefcase tx-60 lh-0 tx-info op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Trabajando</p>
                    <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lblnuevainfo">0</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Datos 3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20">
            <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                <div class="d-flex align-items-center">
                  <i class="ion-android-laptop tx-60 lh-0 tx-warning op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Trabajadores PTD</p>
                    <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lblotrainfo">0</p> 
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- Indicador 1 y 2 -->
            <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                <div class="d-flex align-items-center">
                <style>
              @media only screen and (max-width: 1352px) {
                /* Estilos para pantallas de 14" o menos */
                .mg-l-20{
                  margin-left: 5px;
                }
                .tx-10 {
                  font-size: 9px !important;
                }
              }
            </style>
                <div class="mg-l-20 text-center">
            <div>
                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">
                    <i class="ion-briefcase tx-20 lh-0 tx-danger op-7"></i>&nbsp; Faltas
                </p>
                <div id="chart_div1" style="width: 90px; height: 75px;"></div>
            </div>
              </div>
              <div class="mg-l-20 text-center">
              <div>
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">
                      <i class="ion-alert-circled tx-20 lh-0 tx-warning op-7"></i>&nbsp; Incidencias
                  </p>
                  <div id="chart_div2" style="width: 90px; height: 75px;"></div>
              </div>
              </div>
                </div>
              </div>
            </div>
          </div>
      </div>
        <!-- Tabla de resumen de cursos 
        Resumen top 10 cursos
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
        -->
          <!-- Datos graficos -->
          <div class="row row-sm mg-t-20">
            <!-- Gráfico de barras -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <canvas id="barChart" width="400" height="200"></canvas>
                </div>
              </div>
            </div>
            <!-- Mapa -->
              <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div id="mapid" style="height: 280px;"></div>
                </div>
              </div>
            </div>
          </div>
      </div>

  </div>
  <?php
    }else{
  ?>
  <!-- Datos para la vista usuario (FALTA DEFINIR QUE DATOS SE NESECITAN MOSTRAR-->
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
        <!-- Contenedor blanco con cuadros de información -->
        <div class="row row-sm mg-t-20">
              <!-- Cuadro de información 1 -->
              <div class="col-sm-6 col-xl-3 mg-t-20"> <!-- Agregar clase mg-t-20 para separación hacia abajo -->
                <div class="card">
                      <div class="bg-white rounded overflow-hidden pd-25">
                      <div class="d-flex align-items-center">
                          <i class="ion-android-warning tx-60 lh-0 tx-warning op-7 alert-icon blink icon-retardos"></i>
                          <style>
                              @keyframes blink {
                                  0% { opacity: 1; }
                                  50% { opacity: 0.2; }
                                  100% { opacity: 1; }
                              }

                              .blink {
                                 animation: blink 0.9s infinite;
                                     }

                              .blink2 {
                                  animation: blink 4s infinite;
                                      }
                              .icon-retardos {
                                  color: green; 
                              }
                              .icon-faltas {
                                  color: green; 
                              }
                        </style>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Retardos</p>
                            <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lblnuevainfo">10</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- Cuadro de información 2 -->
            <div class="col-sm-6 col-xl-3 mg-t-20"> <!-- Agregar clase mg-t-20 para separación hacia abajo -->
                <div class="card">
                    <div class="bg-white rounded overflow-hidden pd-25">
                        <div class="d-flex align-items-center">
                        <i class="ion-ios-flag tx-60 lh-0 tx-danger op-7k alert-icon blink2 icon-faltas"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Faltas</p>
                                <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lblfaltas">4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cuadro de información 3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20"> <!-- Agregar clase mg-t-20 para separación hacia abajo -->
                <div class="card">
                    <div class="bg-white rounded overflow-hidden pd-25">
                        <div class="d-flex align-items-center">
                            <i class="ion-clipboard tx-60 lh-0 tx-success op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Incidencias Reportadas</p>
                                <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lbltotal">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cuadro de información 4 -->
            <div class="col-sm-6 col-xl-3 mg-t-20"> <!-- Agregar clase mg-t-20 para separación hacia abajo -->
                <div class="card">
                    <div class="bg-white rounded overflow-hidden pd-25">
                        <div class="d-flex align-items-center">
                            <i class="ion-briefcase tx-60 lh-0 tx-info op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Horas Trabajadas</p>
                                <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lblnuevainfo">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reloj -->
            <div class="col-md-6 col-xl-5 mg-t-20"> <!-- Agregar clase mg-t-20 para separación hacia abajo -->
                <div class="card">
                    <div class="bg-white rounded overflow-hidden pd-85">
                        <div class="d-flex align-items-center">
                            <!-- Contenedor para el reloj digital -->
                            <div id="digital-clock-container" style="position: absolute; left: 25px;">
                                <!-- Agregar la imagen del icono de reloj -->
                                <img src="../../2784399.png" alt="Reloj" style="width: 90px; margin-right: 20px;">
                                <!-- Agregar el reloj digital -->
                                <div id="digital-clock" style="font-size: 50px; display: inline-block;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <?php
      }
    ?>
    <script>
        // Función para actualizar el reloj digital
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var meridiem = hours >= 12 ? 'PM' : 'AM'; // Determina si es AM o PM

            // Convierte las horas al formato de 12 horas
            hours = hours % 12;
            hours = hours ? hours : 12; // Las 0 horas deben ser mostradas como 12 AM
            var timeString = formatTime(hours) + ":" + formatTime(minutes) + ":" + formatTime(seconds) + " " + meridiem;
            document.getElementById("digital-clock").innerText = timeString;
        }

        function formatTime(time) {
            return time < 10 ? "0" + time : time;
        }

        // Actualizar el reloj digital cada segundo
        setInterval(updateClock, 1000);

        // Llamar a la función por primera vez para evitar un retraso inicial
        updateClock();
    </script>

    <!-- Script para cargar los datos y generar la gráfica -->
    <script>
        
       const data = {
           labels: ['Orizaba', 'Cordoba', 'Cozamaloapan', 'Coatzacoalcos'],
           datasets: [{
               label: 'Trabajadores PTD por ciudad',
               data: [31, 39, 17, 54],
               backgroundColor: 'rgba(38, 102, 87, 0.5)',
               borderColor: 'rgba(19, 50, 43, 1)',
               borderWidth: 1
           }]
       };
       // Configurar opciones de la gráfica
       const options = {
           scales: {
               y: {
                   beginAtZero: true
               }
           }
       };
       // Crear la gráfica de barras
       var ctx = document.getElementById('barChart').getContext('2d');
       var myChart = new Chart(ctx, {
           type: 'bar',
           data: data,
           options: options
       });
       // Mapa con Leaflet.js
       var map = L.map('mapid').setView([18.932748, -95.620954], 7);
       L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
           attribution: '&copy; <a href="https://www.openstreetmap.org/copyright"target="_blank">OpenStreetMap</a>'
       }).addTo(map);
       L.control.scale().addTo(map);
       var cities = [
            { name: 'ORIZABA', location: [18.847440, -97.087738], data: 31 },
           { name: 'COATZACOALCOS', location: [18.133281, -94.466169], data: 54 },
           { name: 'CORDOBA', location: [18.886151, -96.931693], data: 39 },
           { name: 'COSAMALOAPAN', location: [18.366228, -95.782712], data: 17 }
       ];
       var currentIndex = 0;
       function addMarker() {
           if (currentIndex >= cities.length) {
               clearInterval(intervalId);
               return;
           }
           
           var city = cities[currentIndex];
           var popupContent = "<b>" + city.name + "</b> <br/>" + "Datos: " + city.data;
           var marker = L.marker(city.location).addTo(map);
           marker.bindPopup(popupContent);
           marker.openPopup();
           currentIndex++;
       }
           var interval = 3000; // 3 segundos
           addMarker();
           var intervalId = setInterval(addMarker, interval);
           function restartMarkers() {
             currentIndex = 0;
             map.eachLayer(function(layer) {
                 if (layer instanceof L.Marker) {
                     map.removeLayer(layer);
                 }
             });
             clearInterval(intervalId);
             intervalId = setInterval(addMarker, interval);
         }
         var restartInterval = 25000; // 25 segundos
         setInterval(restartMarkers, restartInterval);
    </script>

    <script type="text/javascript">
        // Indicadores reloj
        google.charts.load('current', {'packages':['gauge']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {

            var data1 = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['', 20],
            ]);

            var data2 = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['', 45],
            ]);

                var options = {
                width: 140, 
                height: 95, 
                redFrom: 90,
                redTo: 100, 
                yellowFrom: 75,
                yellowTo: 90, 
                greenFrom: 0, 
                greenTo: 75,
                minorTicks: 8,
            };

            var chart1 = new google.visualization.Gauge(document.getElementById('chart_div1'));
            var chart2 = new google.visualization.Gauge(document.getElementById('chart_div2'));

            chart1.draw(data1, options);
            chart2.draw(data2, options);



            var chart1 = new google.visualization.Gauge(document.getElementById('chart_div1'));
            var chart2 = new google.visualization.Gauge(document.getElementById('chart_div2'));

            chart1.draw(data1, options);
            chart2.draw(data2, options);

            setInterval(function() {
                data1.setValue(0, 1, 40 + Math.round(50 * Math.random()));
                data2.setValue(0, 1, 40 + Math.round(50 * Math.random()));
                chart1.draw(data1, options);
                chart2.draw(data2, options);
            }, 13000);
        }
    </script>

    <!-- Script para cambio de color icono retardos -->
    <script>
        // Obtener el elemento que contiene el número de retardos
        var lblnuevainfo = document.getElementById("lblnuevainfo");

        // Obtener el elemento del icono de retardos
        var iconRetardos = document.querySelector(".icon-retardos");

        // Obtener el valor actual de los retardos
        var valorRetardos = parseInt(lblnuevainfo.textContent);

        // Cambiar el icono basado en el valor de los retardos
        if (valorRetardos === 0) {
            iconRetardos.classList.remove('ion-android-warning'); 
            iconRetardos.classList.add('ion-checkmark-circled'); 
            iconRetardos.style.color = "green"; 
            iconRetardos.style.animation = "none";
        } else if (valorRetardos > 3) {
            iconRetardos.classList.add('ion-android-warning'); 
            iconRetardos.classList.remove('ion-checkmark-circled'); 
            iconRetardos.style.color = "#E5be01"; 
        }
    </script>

    <!-- Script para cambio de color icono faltas -->
    <script>
        // Obtener el elemento que contiene las faltas
        var lblfaltas = document.getElementById("lblfaltas");

        // Obtener el elemento del icono de faltas
        var iconFaltas = document.querySelector(".icon-faltas");

        // Obtener el valor actual de las faltas
        var faltas = parseInt(lblfaltas.textContent);

        // Cambiar el icono basado en el valor de las faltas
        if (faltas === 0) {
            iconFaltas.classList.remove('ion-ios-flag'); 
            iconFaltas.classList.add('ion-checkmark-circled'); 
            iconFaltas.style.color = "green"; 
            iconFaltas.style.animation = "none";
        } else if (faltas > 3) {
            iconFaltas.classList.add('ion-ios-flag'); 
            iconFaltas.classList.remove('ion-checkmark-circled'); 
            iconFaltas.style.color = "#b71008"; 
        }
    </script>

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="usuhome.js"></script>
  </body>
</html>

<?php
  }else{
    header("Location:".Conectar::ruta()."404.html");
  }
?>
