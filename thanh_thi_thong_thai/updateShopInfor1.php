<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$sellerId = $_POST["sellerId"];
//$freeShip = $_POST["freeShip"];

		if (isset($_FILES['image1'])) {
		if ($_FILES['image1']['size']<50000) //5000 mean 500kb
		{
			$file1 = rand() . '_' .time().".jpeg";
$target_dir1 = "upload/shopInfor"."/".$file1;

$sql = "UPDATE shopInfor SET link1='$file1' WHERE sellerId='$sellerId'";
	$result = $mysqli->query($sql);
if (move_uploaded_file($_FILES['image1']['tmp_name'], $target_dir1)) {
	echo 'Thay đổi thành công';
}else{
	echo null;
}
}else{
	echo "Dung lượng ảnh quá lớn (<500kb)";
}

}

	if (isset($_FILES['image2'])) {
		if ($_FILES['image2']['size']<50000) //5000 mean 500kb
		{
			$file2 = rand() . '_' .time().".jpeg";
$target_dir2 = "upload/shopInfor"."/".$file2;

$sql = "UPDATE shopInfor SET link2='$file2' WHERE sellerId='$sellerId'";
	$result = $mysqli->query($sql);
if (move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir2)) {
	echo 'Thay đổi thành công';
}else{
	echo null;
}
}else{
	echo "Dung lượng ảnh quá lớn (<500kb)";
}

}

?>
	
  
 