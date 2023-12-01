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
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #0EAD69;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>
<body>

	
</head>
 <ul>
 
  <li><a href="junio 02.php">Orizaba</a></li>
  <li><a href="junio 38.php">Cosamalopan</a></li>
	  <li><a href="junio 45.php">Coatzacoalcos</a></li>
		  <li><a href="adeudomesjunio.php">Adeudo 1 mes</a></li>
		    <li><a href="adeudo2mesjunio.php">Adeudo 2 mes</a></li>
    </div>
  </li>
</ul>

<?php
include("php/header.php");
?>
     
	 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Pagos de Mod 40 Junio.
						
						</h1>
			
<div class="alert alert-danger fade in">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>AVISO: </strong> VERIFICA LOS ADEUDOS MENSUALES.
</div>
	 <link href="css/datatable/datatable.css" rel="stylesheet" />


	 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Administrar Información   
                        </div>
                       
									<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=paysystem', 'root', ''); // el campo vaciío es para la password. 

?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>Subdelegacion</th>
			<th>NSS</th>
			<th>Nombre</th>
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from junio') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['subdelegacion'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['nss'] ?></td>
    <td><?php echo $row['nombre'] ?></td>
 </tr>
<?php
	}
?>
</table>
</body>
</html>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	<script src="js/dataTable/jquery.dataTables.min.js"></script>
    
     <script>
         $(document).ready(function () {
             $('#tSortable22').dataTable({
    "bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true });
	
         });
		 
	
    </script>
		
		
				
				
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
	
	</div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>

    
</body>
</html>