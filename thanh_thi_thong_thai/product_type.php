<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$productId = $obj['productId'];
$main_type1 = $obj['main_type1'];
$main_type2 = $obj['main_type2'];
$main_type3 = $obj['main_type3'];
$type1 = $obj['type1'];
$type2 = $obj['type2'];
$type3 = $obj['type3'];
$type4 = $obj['type4'];
$type5 = $obj['type5'];
$type6 = $obj['type6'];
$type7 = $obj['type7'];
$type8 = $obj['type8'];
$type9 = $obj['type9'];
$type10 = $obj['type10'];
$type11 = $obj['type11'];
$type12 = $obj['type12'];
$type13 = $obj['type13'];
$type14 = $obj['type14'];
$type15 = $obj['type15'];

$sql = "INSERT INTO producttype(id_product,main_type1,main_type2,main_type3,type1,type2,type3,type4,type5,type6,type7,type8,type9,type10,type11,type12,type13,type14,type15) VALUES('$productId','$main_type1','$main_type2','$main_type3','$type1','$type2','$type3','$type4','$type5','$type6','$type7','$type8','$type9','$type10','$type11','$type12','$type13','$type14','$type15')";
$result = $mysqli->query($sql);
if ($result) {
		echo "Ok";
	}else{
		echo "Fail";
	}
 ?>







	
  
 