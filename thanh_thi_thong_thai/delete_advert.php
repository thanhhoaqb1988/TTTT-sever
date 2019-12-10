<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$productId = $obj['productId'];

$sql = "DELETE FROM product_advert where id_product = '$productId'";
$result = $mysqli->query($sql);
if ($result) {
		echo "Ok";
	}else{
		echo "Fail";
	}
 ?>







	
  
 