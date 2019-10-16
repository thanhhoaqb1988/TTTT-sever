<?php

$connect = mysqli_connect("localhost", "root","","thanh thi thong thai");
  mysqli_query($connect, "SET NAMES 'utf8'");
$query1 = " SELECT *FROM productlist1 ";
$dataPL1 = mysqli_query($connect, $query1);

while ($row = mysqli_fetch_assoc($dataPL1)){
	  $productList1[] = $row;
}

$query2 = " SELECT *FROM productlist2 ";
$dataPL2 = mysqli_query($connect, $query2);

while ($row = mysqli_fetch_assoc($dataPL2)){
	  $productList2[] = $row;
}
$query3 = " SELECT *FROM productlist3 ";
$dataPL3 = mysqli_query($connect, $query3);

while ($row = mysqli_fetch_assoc($dataPL3)){
	  $productList3[] = $row;
}
  $array = array('productList1'=>$productList1,'productList2'=>$productList2,'productList3'=>$productList3);
   echo json_encode($array);
   ?>