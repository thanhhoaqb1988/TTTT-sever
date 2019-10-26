<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$productId = $_POST["productId"];

if ($_FILES['image1']['name'] == '' && $_FILES['image2']['name'] == '' && $_FILES['image3']['name'] == '' && $_FILES['image4']['name'] == '' ) {
	echo "Bạn chưa chọn ảnh";
}
else{
		if (isset($_FILES['image1'])) {
		if ($_FILES['image1']['size']<50000) //5000 mean 500kb
		{
			$file = rand() . '_' .time().".jpeg";
$target_dir = "upload/images"."/".$file;
$sql = "INSERT INTO images(link,id_product) VALUES('$file','$productId')";
	$result = $mysqli->query($sql);
if (move_uploaded_file($_FILES['image1']['tmp_name'], $target_dir)) {
	echo null;
}else{
	echo null;
}
}else{
	echo "Dung lượng ảnh quá lớn (<500kb)";
}

}

if (isset($_FILES['image2'])) {
	if ($_FILES['image2']['size']<50000) {
$file = rand() . '_' .time().".jpeg";
$target_dir = "upload/images"."/".$file;
$sql = "INSERT INTO images(link,id_product) VALUES('$file','$productId')";
	$result = $mysqli->query($sql);
if (move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir)) {
	echo null;
}else{
	echo null;
}
	}else {
		echo "Dung lượng ảnh quá lớn (<500kb)";
	}

}
if (isset($_FILES['image3'])) {
	if ($_FILES['image3']['size']<50000) {
$file = rand() . '_' .time().".jpeg";
$target_dir = "upload/images"."/".$file;
$sql = "INSERT INTO images(link,id_product) VALUES('$file','$productId')";
	$result = $mysqli->query($sql);
	if($result){
		echo null;
	}
else{
	echo null;
}
if (move_uploaded_file($_FILES['image3']['tmp_name'], $target_dir)) {
	echo null;
}else{
	echo null;
}
	}else {
		echo "Dung lượng ảnh quá lớn (<500kb)";
	}

}
if (isset($_FILES['image4'])) {
	if ($_FILES['image4']['size']<50000) {
$file = rand() . '_' .time().".jpeg";
$target_dir = "upload/images"."/".$file;
$sql = "INSERT INTO images(link,id_product) VALUES('$file','$productId')";
	$result = $mysqli->query($sql);
	if($result){
		echo null;
	}
else{
	echo null;
}
if (move_uploaded_file($_FILES['image4']['tmp_name'], $target_dir)) {
	echo null;
}else{
	echo null;
}
	}else {
		echo "Dung lượng ảnh quá lớn (<500kb)";
	}

}
}




?>
	
  
 