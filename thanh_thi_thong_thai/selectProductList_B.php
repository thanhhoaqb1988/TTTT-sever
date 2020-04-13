
<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$id_seller= $obj['id_seller'];
$id_lista= $obj['id_lista'];

//$query = $mysqli->query(" SELECT * FROM productlist_upload where id_user = '$id_seller' && productlist_a ='$listName'");
$query = $mysqli->query(" SELECT p.id_listb, l.list_name FROM product p inner join productlistb l ON p.id_listb = l.id where id_seller = '$id_seller' && id_lista='$id_lista'");
while ($row = mysqli_fetch_assoc($query)){
	  $hot_news[] = $row;
}
  $array = array('productlistB'=>$hot_news);
   echo json_encode($array);
   ?>