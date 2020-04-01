<?php
//function
use \Firebase\JWT\JWT;
require __DIR__ . '/vendor/autoload.php';
function getToken($phone, $key='example_key'){
	$token = array(
		"phone" => $phone,
	    "iat" => time(),
	    "expire" =>time() + 86400*10 //10 days
	);

	return $jwt = JWT::encode($token, $key);
}

?>