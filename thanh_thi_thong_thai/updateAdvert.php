<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$productId = $obj['productId'];
$advert_name = $obj['advertName'];
$id_seller = $obj['sellerId'];
// $advert_name = 'rr';
// $id_seller = '1';
// $productId = '186';
$sql = "SELECT *  FROM product_advert where advert_name ='$advert_name' && id_seller = '$id_seller'";
$result = $mysqli->query($sql);
$advert = mysqli_fetch_assoc($result);
$id_advert = $advert['id'];
$sql1 = "UPDATE product SET sale ='$id_advert' WHERE id = '$productId' ";

$result1 = $mysqli->query($sql1);
if ($result1) {
	echo 'OK';
} else{
	echo 'Fail';
}
 ?>







	
  
 