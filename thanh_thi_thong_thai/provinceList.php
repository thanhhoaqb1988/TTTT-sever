<?php

include('connect/connect.php');
$query = $mysqli->query(" SELECT *FROM provincelist ");
while ($row = $query-> fetch_object()){
	  $provincelist[] = $row;
}
  $array = array('provincelist'=>$provincelist);
   echo json_encode($array);
   ?>