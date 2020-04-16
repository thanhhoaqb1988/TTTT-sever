<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$name = $obj["name"];
$price = $obj["price"];
$productId = $obj["productId"];
	
$sql = "UPDATE product SET name = '$name', price='$price' WHERE  id = '$productId'";
	$result = $mysqli->query($sql);
if ($result) {
	echo "Cập nhật thành công";
} else { echo "Xảy ra lỗi";}

?>
	
  
 