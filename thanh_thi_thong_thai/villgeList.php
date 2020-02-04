<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$ma_huyen = $obj['ma_huyen'];
$query = $mysqli->query(" SELECT *FROM villigelist1 WHERE ma_huyen='$ma_huyen' ");
while ($row = $query-> fetch_object()){
	  $villgeList[] = $row;
}
  $array = array('villgeList'=>$villgeList);
   echo json_encode($array);
   ?>