<?php

include('connect/connect.php');
$query = $mysqli->query(" SELECT *FROM sellerCenter_header ") ;
while ($row = mysqli_fetch_assoc($query)){
	  $header[] = $row;
}

$query1 = $mysqli->query(" SELECT *FROM sellerCenter_ttdn ");

while ($row = mysqli_fetch_assoc($query1)){
	$ttdn[] = $row;
}
$query2 =$mysqli->query( " SELECT *FROM sellerCenter_dangtaidn ");

while ($row = mysqli_fetch_assoc($query2)){
  $dtdn[] = $row;
}
$query3 = $mysqli->query(" SELECT *FROM sellerCenter_loaisp ");

while ($row = mysqli_fetch_assoc($query3)){
  $loaisp[] = $row;
}
$query4 =  $mysqli->query (" SELECT *FROM sellercenter_sanphamdn ") ;
while ($row = mysqli_fetch_assoc($query4)){
  $sanphamdn[] = $row;
}
  $array = array('header'=>$header,'ttdn'=>$ttdn, 'dtdn'=>$dtdn , 'loaisp'=>$loaisp, 
    'sanphamdn'=>$sanphamdn);
   echo json_encode($array);