<?php
//đăng kí
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$name = $obj['name'];
$phone = $obj['phoneNumber'];
$password = md5($obj['password']);

$sql = "SELECT phone FROM users where phone ='$phone'";
	$result = $mysqli->query($sql);
if ($result) {
	 $row = mysqli_num_rows($result);
	 if ($row>0) {
	 	echo 'Đăng ký không thành công, số điện thoại đã có người sử dụng';
	 }
	else {
	$sql = "INSERT INTO users(phone,password,name) VALUES('$phone','$password','$name')";
	$result = $mysqli->query($sql);
	if($result){
		echo 'Đăng ký thành công';
	}
}
}

	



?>