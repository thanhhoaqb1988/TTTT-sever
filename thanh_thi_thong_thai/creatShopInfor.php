<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$sellerId = $_POST["sellerId"];
$freeShip = $_POST["freeShip"];

		if (isset($_FILES['image1']) && isset($_FILES['image2'])) {
		if ($_FILES['image1']['size']<50000) //5000 mean 500kb
		{
			$file1 = rand() . '_' .time().".jpeg";
			$file2 = rand() . '_' .time().".jpeg";
$target_dir1 = "upload/shopInfor"."/".$file1;
$target_dir2 = "upload/shopInfor"."/".$file2;
$sql = "INSERT INTO shopInfor(sellerId,link1,link2,freeShip) VALUES('$sellerId','$file1','$file2','$freeShip')";
	$result = $mysqli->query($sql);
if (move_uploaded_file($_FILES['image1']['tmp_name'], $target_dir1)) {
	echo 'Thiết lập thành công';
}else{
	echo "Đã xảy ra lỗi";
}
if (move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir2)) {
	echo null;
}else{
	echo "Đã xảy ra lỗi";
}


}else{
	echo "Dung lượng ảnh quá lớn (<500kb)";
}

}

?>
	
  
 