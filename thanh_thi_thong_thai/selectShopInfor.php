
<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$id_seller= $obj['id_seller'];
//$id_seller= '73';
$query = $mysqli->query(" SELECT s.*,u.name,u.phone FROM shopInfor s  inner join users u ON s.sellerId=u.id where sellerId = '$id_seller'");
while ($row = mysqli_fetch_assoc($query)){
	  $hot_news[] = $row;
}

  $array = array('shopInfor'=>$hot_news);
   echo json_encode($array);
   ?>

