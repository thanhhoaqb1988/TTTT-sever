
<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$id_seller= $obj['id_seller'];
$id_listb= $obj['id_listb'];

$query = $mysqli->query(" SELECT p.id_list, l.list_name FROM product p inner join productlistc l ON p.id_list = l.id where id_seller = '$id_seller' && id_listb='$id_listb'");
while ($row = mysqli_fetch_assoc($query)){
	  $hot_news[] = $row;
}

  $array = array('productlistC'=>$hot_news);
   echo json_encode($array);
   ?>