
<?php
	include('connect/connect.php');
	//$id_seller=$_POST["sellerId"];
	$json = file_get_contents('php://input');
    $obj = json_decode($json, true);
    $idProduct= $obj['idProduct'];
     //$idProduct= '183';
	$products = $mysqli->query("SELECT * FROM producttype where id_product = '$idProduct'");
	while ($row = $products->fetch_object()){
	    $product[] = $row;
	};
	

	$array = array('productType'=>$product);
	echo json_encode($array);


?>