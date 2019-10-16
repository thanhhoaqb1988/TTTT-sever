<?php
//cart
include('connect/connect.php');
$sql = "SELECT * FROM product ";
$result = $mysqli->query($sql);
$product = mysqli_fetch_assoc($result);
//$id_user = $user['id'];
foreach ($product as $value) {
	$id_sp = mysqli_fetch_assoc($value);
	echo json_encode($id_sp);
}

?>