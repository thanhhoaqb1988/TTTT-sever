<?php
//search
	include('connect/connect.php');

	if(isset($_GET['key'])) {
		$keyword = $_GET['key'];
		$products = $mysqli->query("SELECT p.*,  t.main_type1, t.main_type2,t.main_type3, l.list_name as listC,u.name as sellerName,u.phone,s.shopAdress, a.decreat_price,a.decreat_percent, GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product inner join producttype t ON t.id_product = p.id  inner join productlistc l ON p.id_list = l.id inner join users u ON p.id_seller = u.id inner join product_advert a ON p.sale=a.id inner join shopinfor s ON p.id_seller = s.sellerId   where p.name like '%$keyword%' group by p.id");
		while ($row = $products->fetch_object()){
			$assignees = explode(',', $row->images);
			$row->images = $assignees;
		    $product[] = $row;
		}
		$array = array('search'=>$product);
        echo json_encode($array);
	}
	else{
		echo "Vui lòng nhập từ khóa ";
	}
?>
	