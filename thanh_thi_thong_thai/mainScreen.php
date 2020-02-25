<?php

include('connect/connect.php');
$product = $mysqli->query("SELECT * , GROUP_CONCAT(l.list_id) AS listId FROM imagestaoct i LEFT JOIN list_cuact l ON l.maCT= i.maCT where i.is_chosed='1'  group by i.id LIMIT 0,7");
	while ($row = $product->fetch_object()){
	   $assignees = explode(',', $row->listId);
		$row->listId = $assignees;
	   $hot_news[] = $row;
	};	

$products = $mysqli->query("SELECT p.id,p.name as name ,p.id_seller,  t.main_type1, t.main_type2,t.main_type3, p.price, p.description,p.sale, l.list_name as listC,u.name as sellerName,  GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id group by p.id LIMIT 0,6 ");

	while ($row = $products->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	   $GYCB[] = $row;
	}

  $array = array('hot_news'=>$hot_news,'GYCB'=> $GYCB);
   echo json_encode($array);
   ?>