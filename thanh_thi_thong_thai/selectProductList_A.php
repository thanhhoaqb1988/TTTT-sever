
<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$id_seller= $obj['id_seller'];

$query = $mysqli->query(" SELECT * FROM productlist_upload where id_user = '$id_seller'");
while ($row = mysqli_fetch_assoc($query)){
	  $hot_news[] = $row;
}

  $array = array('productlistA'=>$hot_news);
   echo json_encode($array);
   ?>