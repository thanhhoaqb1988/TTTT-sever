<?php

// use \Firebase\JWT\JWT;
// require __DIR__ . '/vendor/autoload.php';
// include('function.php');
// include('connect/connect.php');
// $json = file_get_contents('php://input');
// 	$obj = json_decode($json, true);
// 	$key = "example_key";
// $token = $obj['token'];
// try{
// 	$decoded = JWT::decode($token, $key, array('HS256'));
// 	if($decoded->expire < time()){
// 		echo 'HET_HAN';
// 	}else{
// 		$productName=$obj['productName'];
//         $description=$obj['description'];
// 		$email = $decoded->email;
// 		$sql = "SELECT * FROM users where email = '$email'";
// 		$result = $mysqli->query($sql);
// 		$user = mysqli_fetch_assoc($result);
// 		$id_user = $user['id'];
// 	}

// $sql = "INSERT INTO product(name,description,id_seller) VALUES('$productName','$description','$id_user')";
// $result = $mysqli->query($sql);
// if ($result) {
// 	echo "Thêm sản phẩm thành công";
// } else{
// 	echo "Lỗi, thêm sản phẩm thất bại";
// }
// }
// catch(Exception $e){
// 	echo 'TOKEN_KHONG_HOP_LE';
// }



//ok
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$productName = $obj['productName'];
$description = $obj['description'];
$DmId = $obj['DmId'];
$email = $obj['email'];
$sql = "SELECT * FROM users where email = '$email'";
$result = $mysqli->query($sql);
$user = mysqli_fetch_assoc($result);
$id_user = $user['id'];

if($productName !='' && $description != ''){
$sql = "INSERT INTO product(name,description,id_seller,id_type) VALUES('$productName','$description','$id_user','$DmId')";
	$result = $mysqli->query($sql);
	if($result){
		$sql = "SELECT id FROM product where name ='$productName' && description = '$description' ";
		$result = $mysqli->query($sql);
		while ($row = $result->fetch_object()){
		    $id_product = $row;
		}
		print_r(json_encode($id_product));
	}
	else{
		echo (json_encode('Lỗi!, xin kiểm tra lại'));
	}
}
else{
	echo (json_encode( 'Bạn chưa nhập đủ thông tin'));
}
	
	// if (isset($_FILES['image1'])) {
	// 	move_uploaded_file($_FILES['image1']['tmp_name'], $target_dir);
	// }
	// if (isset($_FILES['image2'])) {
	// 	move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir);
	// }
	// if (isset($_FILES['image3'])) {
	// 	move_uploaded_file($_FILES['image3']['tmp_name'], $target_dir);
	// }
	// if (isset($_FILES['image4'])) {
	// 	move_uploaded_file($_FILES['image4']['tmp_name'], $target_dir);
	// }


// use \Firebase\JWT\JWT;
// require __DIR__ . '/vendor/autoload.php';
// include('function.php');
// include('connect/connect.php');
// $json = file_get_contents('php://input');
// $obj = json_decode($json, true);
// $key = "example_key";
// $token = $obj['token'];
// try{
// 	$decoded = JWT::decode($token, $key, array('HS256'));
// 	if($decoded->expire < time()){
// 		echo 'HET_HAN';
// 	}else{


// $productName = $obj['productName'];
// $description = $obj['description'];
// $email = $decoded->email;
// 		$sql = "SELECT * FROM users where email = '$email'";
// 		$result = $mysqli->query($sql);
// 		$user = mysqli_fetch_assoc($result);
// 		$id_user = $user['id'];
// if($productName !='' && $description != ''){
	
// 	$sql = "INSERT INTO product(name,description,id_seller) VALUES('$productName','$description','$id_user')";
// 	$result = $mysqli->query($sql);
// 	if($result){
// 		echo 'Đăng ký thành công';
// 	}
// 	else{
// 		echo 'Đăng ký không thành công, email đã có người sử dụng';
// 	}
// }
// else{
// 	echo 'Đăng ký không thành công, xin hãy nhập đủ thông tin';
// }
// 	}
// }catch(Exception $e){
// 	echo 'TOKEN_KHONG_HOP_LE';
// }


?>







	
  
 