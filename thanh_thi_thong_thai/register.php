<?php
//đăng kí
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$name = $obj['name'];
$email = $obj['email'];
$password = md5($obj['password']);
if($name !='' && $email != '' && $password!=''){
	
	$sql = "INSERT INTO users(email,password,name) VALUES('$email','$password','$name')";
	$result = $mysqli->query($sql);
	if($result){
		echo 'Đăng ký thành công';
	}
	else{
		echo 'Đăng ký không thành công, email đã có người sử dụng';
	}
}
else{
	echo 'Đăng ký không thành công, xin hãy nhập đủ thông tin';
}

?>