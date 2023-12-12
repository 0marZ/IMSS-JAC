<?php include('connection.php');

$output= array();
$sql = "SELECT * FROM users ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'Cve_Delegacion',
	2 => 'Cve_Subdelegacion',
	3 => 'Num_P_pago',
	4 => 'Cve_Nss',
	5 => 'Num_Folio_Sua',
	6 => 'Nom_Trabajador',
	7 => 'Fec_Pago',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE Cve_Delegacion like '%".$search_value."%'";
	$sql .= " OR Cve_Subdelegacion like '%".$search_value."%'";
	$sql .= " OR Num_P_pago like '%".$search_value."%'";
	$sql .= " OR Cve_Nss like '%".$search_value."%'";
	$sql .= " OR Num_Folio_Sua like '%".$search_value."%'";
	$sql .= " OR Nom_Trabajador like '%".$search_value."%'";
	$sql .= " OR Fec_Pago like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['Cve_Delegacion'];
	$sub_array[] = $row['Cve_Subdelegacion'];
	$sub_array[] = $row['Cve_Nss'];
	$sub_array[] = $row['Num_P_pago'];
	$sub_array[] = $row['Num_Folio_Sua'];
	$sub_array[] = $row['Nom_Trabajador'];
	$sub_array[] = $row['Fec_Pago'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
