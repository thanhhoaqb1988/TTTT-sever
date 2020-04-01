<?php

include('connect/connect.php');
$product = $mysqli->query("SELECT * , GROUP_CONCAT(l.list_id) AS listId FROM imagestaoct i LEFT JOIN list_cuact l ON l.maCT= i.maCT where i.is_chosed='1'  group by i.id LIMIT 0,7");
	while ($row = $product->fetch_object()){
	   $assignees = explode(',', $row->listId);
		$row->listId = $assignees;
	   $hot_news[] = $row;
	};	

$products = $mysqli->query("SELECT p.id,p.name as name ,p.id_seller,  t.main_type1, t.main_type2,t.main_type3, p.price, p.description,p.sale, l.list_name as listC,u.name as sellerName,  GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id  inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id where p.sale='0'  group by p.id LIMIT 0,6 ");

	while ($row = $products->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	   $GYCB[] = $row;
	}
	$product_advert = $mysqli->query("SELECT p.id,p.name as name ,p.id_seller,  t.main_type1, t.main_type2,t.main_type3, p.price, p.description,p.sale,a.decreat_price,a.decreat_percent, l.list_name as listC,u.name as sellerName,  GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id inner join product_advert a ON p.sale=a.id inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id  group by p.id LIMIT 0,6 ");

	while ($row = $product_advert->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	   $advert[] = $row;
	}
	
	$list = $mysqli->query("SELECT * FROM productlista p where p.is_chosed ='1' group by p.id LIMIT 0,7");
	while ($row = $list->fetch_object()){
	   $productList[] = $row;
	};	
	

  $array = array('hot_news'=>$hot_news,'GYCB'=> $GYCB,'productlist'=>$productList,'advert'=>$advert);
   echo json_encode($array);
   ?>