<?php

include('connect/connect.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$proName = $_POST["proName"];
$phone   = $_POST["phone"];
$idUser  = $_POST["idUser"];

		if (isset($_FILES['image1'])) {
		if ($_FILES['image1']['size']<50000) //5000 mean 500kb
		{
			$file = rand() . '_' .time().".jpeg";
$target_dir = "upload/images"."/".$file;
$sql = "INSERT INTO imagestaoct(link,proName,phone,idUser) VALUES('$file','$proName','$phone','$idUser')";
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

?>
	
  
 