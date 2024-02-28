<?php

include "connect.db.php";
$sql = "delete from person where id=".$_GET['id'];
$con = connect_db();
$query = $con->query($sql);

header("Location: ./ver-documentos.php");
?>