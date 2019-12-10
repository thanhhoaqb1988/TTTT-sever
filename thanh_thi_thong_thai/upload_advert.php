<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$productId = $obj['productId'];
$advert_name = $obj['advert_name'];
$decreat_price = $obj['costValue'];
$decreat_percent = $obj['percentValue'];

// $productId = 123;
// $advert_name = 'abc';
// $before_price =123;
// $after_price = 123;

$sql = "INSERT INTO product_advert(id_product,advert_name,decreat_price,decreat_percent) 
VALUES('$productId','$advert_name','$decreat_price','$decreat_percent')";
$result = $mysqli->query($sql);
if ($result) {
		echo "Ok";
	}else{
		echo "Fail";
	}
 ?>







	
  
 