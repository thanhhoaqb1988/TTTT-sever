<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$ma_tinh = $obj['ma_tinh'];
$query = $mysqli->query(" SELECT *FROM districtslist WHERE ma_tinh='$ma_tinh' ");
while ($row = $query-> fetch_object()){
	  $districtslist[] = $row;
}
  $array = array('districtslist'=>$districtslist);
   echo json_encode($array);
   ?>