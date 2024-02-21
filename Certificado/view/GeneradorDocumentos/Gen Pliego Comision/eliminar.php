<?php


include "connect.db.php";
$sql = "delete from pliegos where id=".$_GET['id'];
$con = connect_db();
$query = $con->query($sql);




header("Location: ./index.php");


?>