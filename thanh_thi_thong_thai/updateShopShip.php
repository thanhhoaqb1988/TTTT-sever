<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$sellerId = $obj["sellerId"];
$freeShip = $obj["freeShip"];
$shopAdress = $obj["shopAdress"];
	
$sql = "UPDATE shopInfor SET freeShip='$freeShip', shopAdress='$shopAdress' WHERE sellerId='$sellerId'";
	$result = $mysqli->query($sql);
if ($result) {
	echo "Cập nhật thành công";
} else { echo "Xảy ra lỗi";}

?>
	
  
 