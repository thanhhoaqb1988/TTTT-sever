
<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$idList1= $obj['idList1'];

$query = $mysqli->query(" SELECT * FROM productlistb where id_list1 = '$idList1'");
while ($row = mysqli_fetch_assoc($query)){
	  $hot_news[] = $row;
}

  $array = array('productlistb'=>$hot_news);
   echo json_encode($array);
   ?>