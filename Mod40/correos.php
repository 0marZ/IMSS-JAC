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
.boton-envio {
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
                        <h1 class="page-head-line">ENVIO DE CORREOS 
						
						</h1>
						<div class= "container-fluid">
						<div class="row">
						<div id="tar" class="card-body">
						<h3> Si deseas enviar el correo de notificacion da clic en el boton de envio.</h3>
						<br>
						<img src="./img/correo-electronico.png" alt="" />
                       <br>
					   <br>
						<a href="enviar.php" class="boton-envio">Enviar correos</a>

						</div>
						</div>
						</div>
						
				

	 <link href="css/datatable/datatable.css" rel="stylesheet" />


	 
	
					
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
