<?php

include('connect/connect.php');
	$list = $mysqli->query("SELECT * FROM productlista p ");
	while ($row = $list->fetch_object()){
	   $productList[] = $row;
	};	
  $array = array('list'=>$productList);
   echo json_encode($array);
   ?>