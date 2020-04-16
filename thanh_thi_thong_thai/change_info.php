<!-- <?php
//thay đổi thông tin user
use \Firebase\JWT\JWT;
require __DIR__ . '/vendor/autoload.php';
include('function.php');
include('connect/connect.php');

$key = "example_key";
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$token = $obj['token'];
try{
	$decoded = JWT::decode($token, $key, array('HS256'));
	if($decoded->expire < time()){
		echo 'HET_HAN';
	}
	else{
		$phone = $decoded->phone;
		$name = $obj['name'];
		$newphone = $obj['newphone'];
		$sql = "SELECT phone FROM users where phone ='$newphone'";
	    $result = $mysqli->query($sql);
	    if ($result) {
	     $row = mysqli_num_rows($result);
	      if ($row>0) {
	 	   echo 'Đăng ký không thành công, số điện thoại đã có người sử dụng';
	      } else {
	      	$sql = "UPDATE users SET name='$name', phone='$newphone' WHERE phone ='$phone'";
		     $user = $mysqli->query($sql);
		    if($user){
			$result = $mysqli->query("SELECT u.email, u.name, u.address, u.phone FROM users u where phone = '$phone'");
			$user = mysqli_fetch_assoc($result);
			print_r(json_encode($user));
		}

		else{
			echo 'KHONG_THANH_CONG';
		}
	      }
	}

}
}
catch(Exception $e){
	echo 'LOI';
}


?> -->

<?php
//đăng kí
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$name = $obj['name'];
$phone = $obj['phone'];
$newphone = $obj['newphone'];

$sql = "SELECT phone FROM users where phone ='$newphone'";
	$result = $mysqli->query($sql);
if ($result) {
	 $row = mysqli_num_rows($result);
	 if ($row>0) {
	 	echo 'Thay đổi không thành công, số điện thoại đã có người sử dụng';
	 }
	else {
	$sql = "UPDATE users SET name='$name', phone='$newphone' WHERE phone ='$phone'";
	$result = $mysqli->query($sql);
	if($result){
		echo 'Thay đổi thành công';
	}
}
}

	



?>