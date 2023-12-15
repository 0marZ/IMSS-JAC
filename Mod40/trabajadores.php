<?php
include("php/dbconnect.php");
include("php/checklogin.php");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEMOD 40</title>
<link rel="icon" href="img/favicon IMSS-Logo.png">
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<link href="css/ui.css" rel="stylesheet" />
	<link href="css/datepicker.css" rel="stylesheet" />	
	
    <script src="js/jquery-1.10.2.js"></script>
	
    <script type='text/javascript' src='js/jquery/jquery-ui-1.10.1.custom.min.js'></script>
   

</head>
 <head>
<style>
.boton-descarga {
  padding: 10px;
  background-color: #154F3A;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}

.boton-descarga:hover {
  background-color:#31493C;
  color: black;
}


 </head>
</style>
<?php
include("php/header.php");
?>
     
	 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">TRABAJADORES 
						
						</h1>

	 <link href="css/datatable/datatable.css" rel="stylesheet" />


	 
		<div class="panel panel-default">
                        <div class="panel-heading">
                           Trabajadores por mes. 
                        </div>
						<br>
					<a href="enero.php"  class="boton-descarga">ENERO</a>&nbsp; &nbsp;&nbsp;<a href="febrero.php"  class="boton-descarga">FEBRERO</a>&nbsp; &nbsp;&nbsp;
					<a href="marzo.php"  class="boton-descarga">MARZO</a>&nbsp; &nbsp;&nbsp;
					<a href="abril.php"  class="boton-descarga">ABRIL</a>
<br>

				<a href="mayo.php"  class="boton-descarga">MAYO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="junio.php"  class="boton-descarga">JUNIO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="julio.php"  class="boton-descarga">JULIO</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="agosto.php"  class="boton-descarga">AGOSTO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img
  src="img/IMAGEN MOD 40.png"
  width="400"
  height="200" />
<br>


<a href="septiembre.php"  class="boton-descarga">SEPTIEMBRE</a>&nbsp;&nbsp;
<a href="octubre.php"  class="boton-descarga">OCTUBRE</a>&nbsp;&nbsp;
<a href="noviembre.php"  class="boton-descarga">NOVIEMBRE</a>&nbsp;&nbsp;
<a href="diciembre.php"  class="boton-descarga">DICIEMBRE</a>
<br>
<br>
<br>
<br>
  </div>
                    </div>
                </div>
                <!-- /. ROW  -->

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
      

 
     <div id="footer-sec">
	
  <img src="img/logoheader.png" width="256" height="76" align="left"/>
  <center>
  <img src="img/LOGOCom.png" width="108" height="100">
  <img src="img/JAC_logo2.png" width="153" height="87" align="right"/></center>
  <br>
    <center><p>&copy; 2023 IMSS. Todos los derechos reservados.</p></center>
	</div>
	 <img class="iconos" src="img/Inferior.png" style= "height: auto; width:100%">
   
    
</body>

</html>
