<?php

function connect_db(){
	$host = "localhost";
	$user = "root"; // CAMBIAR POR LO DEL SERVIDOR
	$pass = ""; // CAMBIAR IGUAL 
	$ddbb = "ptd_documentos";
	$con = new mysqli($host, $user, $pass , $ddbb);
//	$con->query("set sql_mode=''");
	return $con;
}

?>