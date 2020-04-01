<?php
include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);

$query = $mysqli->query(" SELECT * FROM productlista");
while ($row = mysqli_fetch_assoc($query)){
	  $hot_news[] = $row;
}

  $array = array('productlista'=>$hot_news);
   echo json_encode($array);
   ?>