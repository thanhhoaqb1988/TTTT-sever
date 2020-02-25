
<?php
	include('connect/connect.php');
	//$id_seller=$_POST["sellerId"];
	$json = file_get_contents('php://input');
    $obj = json_decode($json, true);
    //$id_seller= $obj['sellerId'];
     //$id_seller= '68';
	$products = $mysqli->query("SELECT * , GROUP_CONCAT(l.list_name) AS listCT FROM imagestaoct i LEFT JOIN list_cuact l ON l.maCT= i.maCT where i.is_chosed='1'  group by i.id LIMIT 0,6");
	while ($row = $products->fetch_object()){
	   $assignees = explode(',', $row->listCT);
		$row->listCT = $assignees;
	   $AdminCT[] = $row;
	};	

	$array = array('AdminCT'=>$AdminCT);
	echo json_encode($array);


?>