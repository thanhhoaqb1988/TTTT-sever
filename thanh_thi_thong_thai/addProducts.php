<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$productName = $obj['productName'];
$description = $obj['description'];
$DmId = $obj['idListC'];
$price = $obj['price'];
$phone = $obj['phone'];
$id_listb = $obj['id_listb'];
$id_lista = $obj['id_lista'];
$sql = "SELECT * FROM users where phone = '$phone'";
$result = $mysqli->query($sql);
if ($result) {
$user = mysqli_fetch_assoc($result);
$id_user = $user['id'];
$sql = "INSERT INTO product(name,description,id_list,price,id_seller,id_listb,id_lista) VALUES('$productName','$description','$DmId','$price','$id_user','$id_listb','$id_lista')";
	$result = $mysqli->query($sql);
	if($result){
		$sql = "SELECT id,id_seller FROM product where id_seller = '$id_user' && name ='$productName' && description = '$description' ";
		$result = $mysqli->query($sql);
		while ($row = $result->fetch_object()){
		    $id_product = $row;
		}
		$array = array('productID'=> $id_product);
	    echo json_encode($array);
	}
	else{
		 echo "Lỗi!, xin kiểm tra lại";
	}
}
else {
	 echo "Lỗi!,  kiểm tra lại";
}


?>
