<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$productId = $obj['productId'];
$advertname = $obj['advertName'];
$id_seller = $obj['sellerId'];

$sql = "DELETE FROM product_advert where advert_name = '$advertname' && id_seller = '$id_seller' ";
$result = $mysqli->query($sql);
if ($result) {
$sql = "UPDATE product SET sale = '0' WHERE id = '$productId' ";
$result = $mysqli->query($sql);
if ($result) {
	echo "OK";
} else{
	echo "Fail";
}
	}else{
		echo "Fail";
	}
 ?>







	
  
 