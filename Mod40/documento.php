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
                        <h1 class="page-head-line">MEMORANDUM INTERNO  
						
						</h1>

	 <link href="css/datatable/datatable.css" rel="stylesheet" />


	 
		<div class="panel panel-default">
                        <div class="panel-heading">
                           Memorandum disponibles para descarga. 
                        </div>
						<br>
					<a href="reportesenero2.php"  class="boton-descarga">ENERO</a>&nbsp; &nbsp;&nbsp;<a href="reportesfebrero2.php"  class="boton-descarga">FEBRERO</a>&nbsp; &nbsp;&nbsp;
					<a href="reportesmarzo2.php"  class="boton-descarga">MARZO</a>&nbsp; &nbsp;&nbsp;
					<a href="reportesabril2.php"  class="boton-descarga">ABRIL</a>
<br>


				<a href="reportesmayo2.php"  class="boton-descarga">MAYO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="reportesjunio2.php"  class="boton-descarga">JUNIO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="reportesjulio2.php"  class="boton-descarga">JULIO</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="reportesagosto2.php"  class="boton-descarga">AGOSTO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img
  src="img/IMAGEN MOD 40.png"
  width="400"
  height="200" />



<br>
<a href="reportesseptiembre2.php"  class="boton-descarga">SEPTIEMBRE</a>&nbsp;&nbsp;
<a href="reportesoctubre2.php"  class="boton-descarga">OCTUBRE</a>&nbsp;&nbsp;
<a href="reportesnoviembre2.php"  class="boton-descarga">NOVIEMBRE</a>&nbsp;&nbsp;
<a href="reportesdiciembre2.php"  class="boton-descarga">DICIEMBRE</a>
<br>
<br>
<br>
<br>

    
</body>
</html>
