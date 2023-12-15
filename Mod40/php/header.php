<style>
 .navbar-side{
	background-color: #13322b;
}
.sidebar-collapse{
	background-color:#13322b;
}
.navbar-header{
	background-color:#13322b;
}
.navbar-header{
	background-color:#13322b;
}
.navbar-toggle{
	background-color:#13322b;
}
.navbar-default{
	background-color:#13322b;
}
.navbar-brand{
	background-color:#13322b;
	
}


</style>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls" role="navigation" style="margin-bottom: 0">
             
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="index.php">MODALIDAD 40 IMSS</a>
				<img src="img/SEMOD40.png" width="70" height="68"/>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default  navbar-side" role="navigation">
	
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <!-- <div class="user-img-div">
                            <img src="img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['rainbow_name'];?>
                            <br />
                               
                            </div>
                        </div> -->

                    </li>

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard "></i>Panel de Control</a>
                    </li>
					
					
                       <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Meses</span>
            <span class="pull-right-container">
			
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="enero.php"><i class="fa fa-circle-o"></i> Enero</a></li>
            <li><a href="febrero.php"><i class="fa fa-circle-o"></i> Febrero</a></li>
            <li><a href="marzo.php"><i class="fa fa-circle-o"></i> Marzo</a></li>
            <li><a href="abril.php"><i class="fa fa-circle-o"></i>Abril</a></li>
			 <li><a href="mayo.php"><i class="fa fa-circle-o"></i>Mayo</a></li>
			  <li><a href="junio.php"><i class="fa fa-circle-o"></i>Junio</a></li>
			   <li><a href="julio.php"><i class="fa fa-circle-o"></i>Julio</a></li>
			    <li><a href="agosto.php"><i class="fa fa-circle-o"></i>Agosto</a></li>
				 <li><a href="septiembre.php"><i class="fa fa-circle-o"></i>Septiembre</a></li>
				 <li><a href="octubre.php"><i class="fa fa-circle-o"></i>Octubre</a></li>
				<li><a href="noviembre.php"><i class="fa fa-circle-o"></i>Noviembre</a></li>
		    <li><a href="diciembre.php"><i class="fa fa-circle-o"></i>Diciembre</a></li>
          </ul>
		  
					
                     
					 <li>
                        <a href="documento.php"><i class="fa fa-file-text "></i>Documento </a>
                    </li>
					
					 
					
					<li>
                        <a href="setting.php"><i class="fa fa-cogs "></i>Configuración</a>
                    </li>
					
					 <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Cerrar Sesión</a>
                    </li>
					
			
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->