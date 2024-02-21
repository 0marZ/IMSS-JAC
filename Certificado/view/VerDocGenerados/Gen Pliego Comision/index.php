<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GENERADOR DE PLIEGO DE COMISION</title>
</head>
<body>
<h1>GENERADOR DE PLIEGO DE COMISION</h1>
<div><a href="./newsign.php">Nueva Firma</a></div>
<h3>Ver Documentos Firmados</h3>

<?php

include "connect.db.php";
$sql = "select * from viaticos order by created_at desc";
$con = connect_db();
$query = $con->query($sql);
$data = array();
while($r= $query->fetch_object()){ $data[] = $r; }
?>

<?php if(count($data)):?>
<table border="1">
	<thead>
		<th>#</th>
		<th>Nombre </th>
		<th>Matricula</th>
		<th>Grupo Jerarquico</th>
		<th>Tipo de Contratacion</th>
		<th>Telefono</th>
		<th>Lugar de comision</th>
		<th>Periodo</th>
		<th>Total de dias</th>
		<th>Transporte</th>
		<th>Motivo de Comision</th>
		<th></th>
	</thead>
	<?php foreach($data as $d): ?>
		<tr>
			<td><?php echo $d->id; ?></td>
			<td><?php echo $d->name; ?></td>
			<td><?php echo $d->Matricula; ?></td>
			<td><?php echo $d->GrupoJ; ?></td>
			<td><?php echo $d->Tipo_Contratacion; ?></td>
			<td><?php echo $d->phone; ?></td>
			<td><?php echo $d->Lugar_Comision?></td>
			<td><?php echo $d->Periodo; ?></td>
			<td><?php echo $d->Total_dias; ?></td>
			<td><?php echo $d->Transporte; ?></td>
			<td><?php echo $d->Motivo; ?></td>
			<td>
				<a href="./concentimiento.php?id=<?php echo $d->id ; ?>" target="_blank">Ver Documento</a> 
				<a href="./eliminar.php?id=<?php echo $d->id ; ?>">Eliminar</a> 
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<?php else:?>
<?php endif; ?>

</body>
</html>