
<?php
	include('connect/connect.php');
	//$id_seller=$_POST["sellerId"];
	$json = file_get_contents('php://input');
    $obj = json_decode($json, true);
    $id_seller= $obj['sellerId'];
    // $id_seller= '73';
	$products = $mysqli->query("SELECT p.id,p.name as name ,p.id_list,p.id_lista,p.id_listb, p.id_seller, p.price, p.description,p.sale, u.name as sellerName,u.phone,s.shopAdress, t.main_type1, t.main_type2,t.main_type3, l.list_name as listC, a.decreat_price,a.decreat_percent, GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id inner join shopinfor s ON p.id_seller = s.sellerId inner join product_advert a ON p.sale=a.id  where p.id_seller = '$id_seller' group by p.id LIMIT 0,6 ");
	while ($row = $products->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	    $product[] = $row;
	};
	$productAdvert = $mysqli->query("SELECT p.id,p.name as name ,p.id_seller, u.name as sellerName,u.phone,s.shopAdress, t.main_type1, t.main_type2,t.main_type3, p.price, p.description,p.sale , l.list_name as listC, GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id inner join shopinfor s ON p.id_seller = s.sellerId  where p.id_seller = '$id_seller' && p.sale = '0' group by p.id LIMIT 0,6");
	while ($row = $productAdvert->fetch_object()){
		$assignees = explode(',', $row->images);
		$row->images = $assignees;
	    $productAdverts[] = $row;
	}
	$array = array('product'=>$product, 'productAdvert'=>$productAdverts);
	echo json_encode($array);


?>