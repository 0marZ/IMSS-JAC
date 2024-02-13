<?php



function connect_db(){
	$host = "localhost";
	$user = "root"; // CAMBIAR
	$pass = ""; // CAMBIAR
	$ddbb = "firmadorlite";
	$con = new mysqli($host, $user, $pass , $ddbb);
//	$con->query("set sql_mode=''");
	return $con;
}


?>