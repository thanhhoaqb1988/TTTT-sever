<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$sellerId = $obj['sellerId'];
$advert_name = $obj['advert_name'];
$decreat_price = $obj['costValue'];
$decreat_percent = $obj['percentValue'];
$startTime = $obj['startTime'];
$finishTime = $obj['finishTime'];

// $keys=[];

// $sellerId="68";
// $productId = 123;
// $advert_name = 'adf';
// $decreat_price ="123";
// $decreat_percent = "123";
// $startTime = "098777";
// $finishTime = "098888";

$sql = "INSERT INTO product_advert(id_seller,advert_name,decreat_price,decreat_percent,start_time,end_time) 
VALUES('$sellerId','$advert_name','$decreat_price','$decreat_percent','$startTime','$finishTime')";
$result = $mysqli->query($sql);
if ($result) {
		echo 'Ok';
	}else{
		echo 'NotSucces';
	}




 ?>







	
  
 