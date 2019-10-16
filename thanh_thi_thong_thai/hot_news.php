<?php

$connect = mysqli_connect("localhost", "root","","thanh thi thong thai");
  mysqli_query($connect, "SET NAMES 'utf8'");
$query = " SELECT *FROM hot_news ";
$datahotnew = mysqli_query($connect, $query);

while ($row = mysqli_fetch_assoc($datahotnew)){
	  $hot_news[] = $row;
}

$query1 = " SELECT *FROM goi_y_cho_ban ";
$dataGYCB = mysqli_query($connect, $query1);

while ($row = mysqli_fetch_assoc($dataGYCB)){
	$GYCB[] = $row;
}

  $array = array('hot_news'=>$hot_news,'GYCB'=>$GYCB);
   echo json_encode($array);
   ?>