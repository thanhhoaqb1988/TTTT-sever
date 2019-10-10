<?php

$connect = mysqli_connect("localhost", "root","","thanh thi thong thai");
  mysqli_query($connect, "SET NAMES 'utf8'");
$query = " SELECT *FROM sellerCenter_header ";
$dataheader = mysqli_query($connect, $query);

while ($row = mysqli_fetch_assoc($dataheader)){
	  $header[] = $row;
}

$query1 = " SELECT *FROM sellerCenter_ttdn ";
$datattdn = mysqli_query($connect, $query1);

while ($row = mysqli_fetch_assoc($datattdn)){
	$ttdn[] = $row;
}
$query2 = " SELECT *FROM sellerCenter_dangtaidn ";
$datadangtaidn = mysqli_query($connect, $query2);

while ($row = mysqli_fetch_assoc($datadangtaidn)){
  $dtdn[] = $row;
}
$query3 = " SELECT *FROM sellerCenter_loaisp ";
$dataloaisp = mysqli_query($connect, $query3);

while ($row = mysqli_fetch_assoc($dataloaisp)){
  $loaisp[] = $row;
}
$query4 = " SELECT *FROM sellercenter_sanphamdn ";
$datasanphamdn = mysqli_query($connect, $query4);

while ($row = mysqli_fetch_assoc($datasanphamdn)){
  $sanphamdn[] = $row;
}

  $array = array('header'=>$header,'ttdn'=>$ttdn, 'dtdn'=>$dtdn , 'loaisp'=>$loaisp, 
    'sanphamdn'=>$sanphamdn);
   echo json_encode($array);