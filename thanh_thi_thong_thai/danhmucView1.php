<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
 $idList= $obj['idList'];
$query = $mysqli->query(" SELECT *FROM productlistc WHERE id= '$idList' ");
while ($row = $query-> fetch_object()){
	  $provincelist[] = $row;
}
  $array = array('productlistc'=>$provincelist);
   echo json_encode($array);
   ?>