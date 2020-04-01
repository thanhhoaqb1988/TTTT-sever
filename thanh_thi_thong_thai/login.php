<?php
//dang nhap
use \Firebase\JWT\JWT;
require __DIR__ . '/vendor/autoload.php';
include('function.php');
include('connect/connect.php');
$key = "example_key";
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$phone = $obj['phoneNumber'];
$password = md5($obj['password']);
$sql = "SELECT u.* FROM users u where phone = '$phone' and password = '$password'";
$result = $mysqli->query($sql);

$user = mysqli_fetch_assoc($result);

if($user){
	$jwt = getToken($phone);
	$array = array('token'=>$jwt, 'user'=>$user);
	print_r(json_encode($array));
}
else{
	echo 'SAI_THONG_TIN_DANG_NHAP';
}

?>