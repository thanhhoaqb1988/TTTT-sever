<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$listb = $obj['idListb'];
//$listb = '4';
$product = $mysqli->query("SELECT p.* , t.main_type1, t.main_type2,t.main_type3, u.name as sellerName, a.decreat_price,a.decreat_percent, GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id  inner join productlistc l ON p.id_list = l.id inner join product_advert a ON p.sale=a.id inner join users u ON p.id_seller = u.id where p.id_listb='$listb'  group by p.id LIMIT 0,6 ");

	while ($row = $product->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	   $productListB[] = $row;
	}

  $array = array('productListB'=>$productListB);
   echo json_encode($array);
   ?>