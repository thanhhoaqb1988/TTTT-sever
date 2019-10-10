<?php

$connect = mysqli_connect("localhost", "root","","thanh thi thong thai");
  mysqli_query($connect, "SET NAMES 'utf8'");
$query = " SELECT *FROM hot_news ";
$datahotnew = mysqli_query($connect, $query);
// class hot_news{
// 	function hot_news($id, $image, $description){
// 		$this->id = $id;
// 		$this->image = $image;
// 		$this->description = $description;
// 	}
// }

//$mangHN  = array();
while ($row = mysqli_fetch_assoc($datahotnew)){
   // array_push($mangHN , new  hot_news($row['id'], $row['image'],$row['description']));
	  $hot_news[] = $row;
	
}

   //echo json_encode($mangHN);


$query1 = " SELECT *FROM goi_y_cho_ban ";
$dataGYCB = mysqli_query($connect, $query1);
// class goi_y_cho_ban{
// 	function goi_y_cho_ban($id, $images, $description, $cots, $seller){
// 		$this->idgycb = $id;
// 		$this->imagesgycb = $images;
// 		$this->descriptiongycb = $description;
// 		$this->cotsgycb = $cots;
// 		$this->sellergycb = $seller;
// 	}
// }

//$mangGYCB = array();
while ($row = mysqli_fetch_assoc($dataGYCB)){
   // array_push($mangGYCB , new  goi_y_cho_ban($row['id'], $row['images'],$row['description'],$row['cots'],$row['seller']));
	$GYCB[] = $row;
}
    //echo json_encode($mangGYCB);

  $array = array('hot_news'=>$hot_news,'GYCB'=>$GYCB);
   echo json_encode($array);