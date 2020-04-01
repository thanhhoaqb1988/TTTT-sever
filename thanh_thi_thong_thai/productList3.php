
<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$idList2= $obj['idListb'];

$query = $mysqli->query(" SELECT * FROM productlistc where id_list2 = '$idList2'");
while ($row = mysqli_fetch_assoc($query)){
	  $hot_news[] = $row;
}

  $array = array('productlistc'=>$hot_news);
   echo json_encode($array);
   ?>