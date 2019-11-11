
<?php
	include('connect/connect.php');
	//$id_seller=$_POST["sellerId"];
	$json = file_get_contents('php://input');
    $obj = json_decode($json, true);
    $id_seller= $obj['sellerId'];
	$products = $mysqli->query("SELECT p.id,p.name as name ,p.id_seller, u.name as sellerName,  t.main_type1, t.main_type2,t.main_type3, p.price, p.description,p.sale, l.list_name as listC, GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id where p.id_seller = '$id_seller' group by p.id LIMIT 0,6");
	while ($row = $products->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	    $product[] = $row;
	}
	
	$array = array('product'=>$product);
	echo json_encode($array);


?>