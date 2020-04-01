<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$sellerId = $_POST["sellerId"];
$freeShip = $_POST["freeShip"];

	
$sql = "UPDATE shopInfor SET freeShip='$freeShip' WHERE sellerId='$sellerId'";
	$result = $mysqli->query($sql);
if ($result) {
	echo "Cập nhật thành công";
} else { echo "Xảy ra lỗi";}

?>
	
  
 