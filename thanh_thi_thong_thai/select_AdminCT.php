
<?php
	include('connect/connect.php');
	//$id_seller=$_POST["sellerId"];
	$json = file_get_contents('php://input');
    $obj = json_decode($json, true);
    //$id_seller= $obj['sellerId'];
     //$id_seller= '68';
	$products = $mysqli->query("SELECT * FROM imagestaoct i group by i.id LIMIT 0,6");
	while ($row = $products->fetch_object()){
	    $AdminCT[] = $row;
	};	

	$array = array('AdminCT'=>$AdminCT);
	echo json_encode($array);


?>