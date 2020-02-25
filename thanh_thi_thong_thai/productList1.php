<?php
$connect = mysqli_connect("localhost", "root","","thanh thi thong thai");
  mysqli_query($connect, "SET NAMES 'utf8'");
$query1 = " SELECT *FROM productlista ";
$dataPL1 = mysqli_query($connect, $query1);
while ($row = mysqli_fetch_assoc($dataPL1)){
	  $productList1[] = $row;
}

  $array = array('productList1'=>$productList1);
   echo json_encode($array);
   ?>