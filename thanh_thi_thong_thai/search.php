<?php
//search
	include('connect/connect.php');

	if(isset($_GET['key']) && strlen($_GET['key'])>1){
		$keyword = $_GET['key'];
		$product = array();
		$products = $mysqli->query("SELECT p.*, a.*, GROUP_CONCAT(i.link) AS images FROM product p LEFT JOIN images i ON p.id = i.id_product  inner join product_advert a ON p.sale=a.id where name like '%$keyword%' group by p.id");
		while ($row = $products->fetch_object()){
			$assignees = explode(',', $row->images);
			$row->images = $assignees;
		    $product[] = $row;
		}
		echo (json_encode($product));
	}
	else{
		echo "Vui lòng nhập từ khóa (>1 kí tự)";
	}
?>
	