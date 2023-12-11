<?php
include("php/dbconnect.php");

$error = '';
if(isset($_POST['login']))
{

$username =  mysqli_real_escape_string($conn,trim($_POST['username']));
$password =  mysqli_real_escape_string($conn,$_POST['password']);

if($username=='' || $password=='')
{
$error='All fields are required';
}

$sql = "select * from user where username='".$username."' and password = '".md5($password)."'";

$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['rainbow_username']=$res['username'];
$_SESSION['rainbow_uid']=$res['id'];
$_SESSION['rainbow_name']=$res['name'];
echo '<script type="text/javascript">window.location="index.php"; </script>';

}else
{
$error = 'Invalid Username or Password';
}

}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema MOD 40</title>
<link rel="icon" href="img/favicon IMSS-Logo.png">
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>

<style>
.myhead{
margin-top:0px;
margin-bottom:0px;
text-align:center;
}
body {
  height: 600px;
  background-image: url("img/imssfondo.png");
background-size: cover;
  background-repeat:no-repeat;
  background-position: center center;
}
</style>

</head>
<body >
    <div class="container">
        
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                          
                            <div class="panel-body" style="background-color: #1B2D2A; margin-top:200px; border:solid 3px #0e0e0e;">
							  <h3 class="myhead"><p style="color:#FDFFFC";>SISTEMA MOD 40</p></h3>
                              <form role="form" action="login.php" method="post">
                                    <hr />
                                    <?php
                                    if ($error != '') {
                                        echo '<h5 class="text-danger text-center">' . $error . '</h5>';
                                    }
                                    ?>

                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                        <input type="text" class="form-control" placeholder="Usuario " name="username" required />
                                    </div>

                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Contraseña " name="password" required />
                                    </div>

                                    <button class="btn btn-secondary" type="submit" name="login">Ingresar</button>
                                    <!-- Enlace para regresar a home -->
                                    <a href="../index.php" class="btn btn-success">
                                        <i class="fas fa-home"></i> Regresar a Inicio
                                    </a>
                                </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
