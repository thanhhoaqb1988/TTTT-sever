<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$lista = $obj['idLista'];
//$lista = '4';
$product = $mysqli->query("SELECT p.id,p.name as name ,p.id_list,p.id_lista,p.id_listb, p.id_seller, p.price, p.description,p.sale, t.main_type1, t.main_type2,t.main_type3, u.name as sellerName,u.phone,s.shopAdress,a.decreat_price,a.decreat_percent,  GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id inner join product_advert a ON p.sale=a.id inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id  inner join shopinfor s ON p.id_seller = s.sellerId  where p.id_lista='$lista'  group by p.id LIMIT 0,6 ");

	while ($row = $product->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	   $productListA[] = $row;
	}

  $array = array('productListA'=>$productListA);
   echo json_encode($array);
   ?>