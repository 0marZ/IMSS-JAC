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
    <!-- Agregar los enlaces a las bibliotecas necesarias -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Agregar enlaces para Leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
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
      <!-- Contenido del proyecto -->
      <div class="br-pagebody mg-t-5 pd-x-30">

        <!-- Contenedor blanco con cuadros de información -->
        <div class="row row-sm mg-t-20">
          <!-- Cuadro de informacion 1 -->
          <div class="col-sm-6 col-xl-3">
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
          <!-- Cuadro de informacion 2 -->
          <div class="col-sm-6 col-xl-3">
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
          <!-- Cuadro de informacion 3 -->
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                <div class="d-flex align-items-center">
                  <i class="ion-android-laptop tx-60 lh-0 tx-warning op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Total de trabajadores PTD</p>
                    <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lblotrainfo">0</p> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
          <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                  <!-- Aquí va el código del Gauge de Google -->
                  <div id="chart_div" style="width: 100px; height: 120px;"></div>
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
        <!-- Gráfico de barras y mapa en la misma fila -->
        <div class="row row-sm mg-t-20">
          <!-- Gráfico de barras -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <canvas id="barChart" width="400" height="210"></canvas>
              </div>
            </div>
          </div>
                    <!-- Mapa -->
                    <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div id="mapid" style="height: 300px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  <?php
    }else{
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
    <!-- Contenido del proyecto -->
     <div class="br-pagebody mg-t-5 pd-x-30">
        <!-- Contenedor blanco con cuadros de información -->
        <div class="row row-sm mg-t-20">
          <!-- Cuadro de informacion 1 -->
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                <div class="d-flex align-items-center">
                  <i class="ion-clipboard tx-60 lh-0 tx-success op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Inicidencias</p>
                    <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lbltotal">120</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Cuadro de informacion 2 -->
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                <div class="d-flex align-items-center">
                  <i class="ion-briefcase tx-60 lh-0 tx-info op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Trabajando</p>
                    <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lblnuevainfo">35</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Cuadro de informacion 3 -->
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="bg-white rounded overflow-hidden pd-25">
                <div class="d-flex align-items-center">
                  <i class="ion-android-laptop tx-60 lh-0 tx-warning op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-gray-600 mg-b-10">Total de trabajadores PTD</p>
                    <p class="tx-24 tx-gray-800 tx-lato tx-bold mg-b-2 lh-1" id="lblotrainfo">60</p> 
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
    <!-- Script para cargar los datos y generar la gráfica -->
      <script>
        // Obtener datos de los últimos 10 cursos (reemplaza esto con tu código para obtener los datos)
        const data = {
            labels: ['Orizaba', 'Cordoba', 'Cozamaloapan', 'Coatzacoalcos'],
            datasets: [{
                label: 'Datos por ciudad',
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

        // Crear el mapa con Leaflet.js
        var map = L.map('mapid').setView([18.757792, -95.977274], 7);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Define las coordenadas de las ciudades
        var cities = [
            { name: 'COATZACOALCOS', location: [18.15, -94.42] },
            { name: 'CORDOBA', location: [18.88, -96.93] },
            { name: 'COSAMALOAPAN', location: [18.17, -95.78] },
            { name: 'ORIZABA', location: [18.85, -97.1] }
        ];
        
        // Agregar marcadores al mapa para cada ciudad
        cities.forEach(city => {
            L.marker(city.location).addTo(map)
                .bindPopup(city.name)
                .openPopup();
        });

    </script>

<!-- Incluir la carga de las bibliotecas de Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['', 20],
            ['', 45],
        ]);

        var options = {
            width: 260,
            height: 260,
            redFrom: 90,
            redTo: 100, // Rango rojo (90-100)
            yellowFrom: 75,
            yellowTo: 90, // Rango amarillo (75-90)
            greenFrom: 0, // Rango verde (0-75)
            greenTo: 75,
            minorTicks: 8,
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        // Agregar texto personalizado abajo de cada indicador
        var chartDiv = document.getElementById('chart_div');

        var incidenciasText = document.createElement('p');
        incidenciasText.innerHTML = 'Incidencias';
        incidenciasText.style.position = 'absolute';
        incidenciasText.style.bottom = '-20px'; // Ajusta según tu preferencia
        incidenciasText.style.left = '50%';
        incidenciasText.style.transform = 'translateX(55%)'; // Centrar horizontalmente
        chartDiv.appendChild(incidenciasText);

        var asistenciasText = document.createElement('p');
        asistenciasText.innerHTML = 'Asistencias';
        asistenciasText.style.position = 'absolute';
        asistenciasText.style.bottom = '-20px'; // Ajusta según tu preferencia
        asistenciasText.style.left = '50%';
        asistenciasText.style.transform = 'translateX(-125%)'; // Centrar horizontalmente
        chartDiv.appendChild(asistenciasText);

        setInterval(function() {
            data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
            data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
            chart.draw(data, options);
        }, 13000);
    }
</script>



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
