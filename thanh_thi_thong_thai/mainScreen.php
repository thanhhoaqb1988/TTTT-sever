<?php

include('connect/connect.php');
$query = $mysqli->query(" SELECT *FROM hot_news ");
while ($row = $query-> fetch_object()){
	  $hot_news[] = $row;
}

$products = $mysqli->query("SELECT p.id,p.name as name ,p.id_seller, u.name as sellerName, t.main_type1, t.main_type2,t.main_type3, p.price, p.description,p.sale, l.list_name, l.id as idList, GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id inner join users u ON p.id_seller = u.id inner join productlista l ON p.id_list = l.id  group by p.id LIMIT 0,6");

	while ($row = $products->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	   $GYCB = $row;
	}

  $array = array('hot_news'=>$hot_news,'GYCB'=>$GYCB);
   echo json_encode($array);
   ?>