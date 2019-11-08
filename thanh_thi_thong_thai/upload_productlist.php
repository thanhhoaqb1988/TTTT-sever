<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$idUser = $obj['id_seller'];
$productId = $obj['productId'];
$Dm1 = $obj['Dm1'];
$Dm2 = $obj['Dm2'];
$Dm3 = $obj['Dm3'];

$sql = "INSERT INTO productlist_upload(id_user,id_product,productlist_a,productlist_b,productlist_c) 
VALUES('$idUser','$productId','$Dm1','$Dm2','$Dm3')";
$result = $mysqli->query($sql);
if ($result) {
		echo "Ok";
	}else{
		echo "Fail";
	}
 ?>







	
  
 