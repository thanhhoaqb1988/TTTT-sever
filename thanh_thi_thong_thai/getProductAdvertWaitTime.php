
<?php
	include('connect/connect.php');
	//$id_seller=$_POST["sellerId"];
	$json = file_get_contents('php://input');
    $obj = json_decode($json, true);
    $id_seller= $obj['sellerId'];
    //$id_seller= '1';
	$query = $mysqli->query("SELECT p.id,p.id_seller,p.id_product, p.advert_name,p.start_time,p.end_time FROM product_advert p  where p.id_seller = '$id_seller' ");
	while ($row = mysqli_fetch_assoc($query)){
	  $productAdvertWaitTime[] = $row;
}
	$array = array('productAdvertWaitTime'=>$productAdvertWaitTime);
	echo json_encode($array);


?>