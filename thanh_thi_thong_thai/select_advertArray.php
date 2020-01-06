
<?php
	include('connect/connect.php');
	//$id_seller=$_POST["sellerId"];
	$json = file_get_contents('php://input');
    $obj = json_decode($json, true);
    $id_seller= $obj['sellerId'];
    //$id_seller= '68';
	$products = $mysqli->query("SELECT pv.advert_name as advertName,pv.decreat_price as costValue, pv.decreat_percent as percentValue, pv.start_time as chosenDate, pv.end_time as finishDate, pv.id_seller as sellerId, GROUP_CONCAT(p.id) AS newArray FROM product_advert pv LEFT JOIN product p ON pv.id = p.sale where pv.id_seller = '$id_seller' group by pv.id LIMIT 0,6");
	while ($row = $products->fetch_object()){
		$assignees = explode(',', $row->newArray);
		$row->newArray = $assignees;
	    $product[] = $row;
	}
	$array = array('productAdvert'=>$product);
	echo json_encode($array);


?>