<?php

include('connect/connect.php');

	$product_advert = $mysqli->query("SELECT p.*,  t.main_type1, t.main_type2,t.main_type3,a.decreat_price,a.decreat_percent, l.list_name as listC,u.name as sellerName,u.phone,s.shopAdress,  GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id inner join product_advert a ON p.sale=a.id inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id inner join shopinfor s  group by p.id LIMIT 0,6 ");

	while ($row = $product_advert->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	   $advert[] = $row;
	}
 $array = array('GYCB'=>$advert);
   echo json_encode($array);

 
   ?>