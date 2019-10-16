<?php


// include('connect/connect.php');
// if (isset($_FILES['image'])) {
// 	$name_array = $_FILES['image']['name'];
// 	$file = rand() . '_' .time().".jpeg";
// 	//$target_dir = "upload/images"."/".$file;
// 	$tmp_name_array = $_FILES['image']['tmp_name'];
// 	$type_array = $_FILES['image']['type'];
// 	$size_array = $_FILES['image']['size'];
// 	$error_array = $_FILES['image']['error'];
//    $allowed_ext = array("jpg","png","jpeg");
//    $ext = end(explode('.', $name_array));
//    if (in_array($ext,$allowed_ext)) {
// if ($name_array<5000) //5000 mean 500kb
//    {
//    	for ($i=0; $i < count($tmp_name_array); $i++) { 
//     if(move_uploaded_file($tmp_name_array[$i], "upload/images"."/".$name_array[$i])){
// 			echo "upload ảnh thành công<br>";
// 		}else {
// 			echo "tải ảnh không thành công".$name_array[$i]."<br>";
// 		}
	
// 		$sql = "INSERT INTO images(link) VALUES('$name_array[$i]')";
// 	$result = $mysqli->query($sql);
// 	if($result){
// 		echo 'Tải ảnh thành công';
// 	}
//     else{
// 	echo 'Tải ảnh thất bại';
// }
// 	}
//    	}
//    else{
//   	echo "chỉ được tải ảnh có dung lượng <500kb";
//   }

//    }else {
//    	echo "Chỉ được tải các ảnh có đuôi jpg, png, jpeg";
//    }

// }else {
// 	echo "Bạn chưa chọn ảnh";
// }
include('connect/connect.php');
// $email=$_FILES['email'];
// $sql = "SELECT * FROM users where email = '$email'";
// $result = $mysqli->query($sql);
// $user = mysqli_fetch_assoc($result);
// $id_user = $user['id'];
if ($_FILES['image1']['name'] == '' && $_FILES['image2']['name'] == '' && $_FILES['image3']['name'] == '' && $_FILES['image4']['name'] == '' ) {
	echo "Bạn chưa chọn ảnh";
}
else{
		if (isset($_FILES['image1'])) {
		if ($_FILES['image1']['size']<50000) //5000 mean 500kb
		{
			$file = rand() . '_' .time().".jpeg";
$target_dir = "upload/images"."/".$file;
$sql = "INSERT INTO images(link,id_product) VALUES('$file','$id_user')";
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
$sql = "INSERT INTO images(link) VALUES('$file')";
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
$sql = "INSERT INTO images(link) VALUES('$file')";
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
$sql = "INSERT INTO images(link) VALUES('$file')";
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


// include('connect/connect.php');
// if ($_FILES['image1']['name'] == '' && $_FILES['image2']['name'] == '' && $_FILES['image3']['name'] == '' && $_FILES['image4']['name'] == '' ) {
// 	echo "Bạn chưa chọn ảnh";
// }else{
// 	if (isset($_FILES['image1'])) {
// $file = rand() . '_' .time().".jpeg";
// $target_dir = "upload/images"."/".$file;
// $sql = "INSERT INTO images(link) VALUES('$file')";
// 	$result = $mysqli->query($sql);
// 	if($result){
// 		echo null;
// 	}
// else{
// 	echo null;
// }
// if (move_uploaded_file($_FILES['image1']['tmp_name'], $target_dir)) {
// 	echo null;
// }else{
// 	echo null;
// }
// }

// if (isset($_FILES['image2'])) {
// $file = rand() . '_' .time().".jpeg";
// $target_dir = "upload/images"."/".$file;
// $sql = "INSERT INTO images(link) VALUES('$file')";
// 	$result = $mysqli->query($sql);
// 	if($result){
// 		echo 'Đăng ký thành công';
// 	}
// else{
// 	echo 'Đăng ký không thành công, xin hãy nhập đủ thông tin';
// }
// if (move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir)) {
// 	echo json_encode([
//       "Message" => "the file has been uploaded",
//       "Status" => "OK"
// 	]);
// }else{
// 	echo json_encode([
//       "Message" => "sorry",
//       "Status" => "error"
// 	]);
// }
// }
// if (isset($_FILES['image3'])) {
// $file = rand() . '_' .time().".jpeg";
// $target_dir = "upload/images"."/".$file;
// $sql = "INSERT INTO images(link) VALUES('$file')";
// 	$result = $mysqli->query($sql);
// 	if($result){
// 		echo 'Đăng ký thành công';
// 	}
// else{
// 	echo 'Đăng ký không thành công, xin hãy nhập đủ thông tin';
// }
// if (move_uploaded_file($_FILES['image3']['tmp_name'], $target_dir)) {
// 	echo json_encode([
//       "Message" => "the file has been uploaded",
//       "Status" => "OK"
// 	]);
// }else{
// 	echo json_encode([
//       "Message" => "sorry",
//       "Status" => "error"
// 	]);
// }
// }
// if (isset($_FILES['image4'])) {
// $file = rand() . '_' .time().".jpeg";
// $target_dir = "upload/images"."/".$file;
// $sql = "INSERT INTO images(link) VALUES('$file')";
// 	$result = $mysqli->query($sql);
// 	if($result){
// 		echo 'Đăng ký thành công';
// 	}
// else{
// 	echo 'Đăng ký không thành công, xin hãy nhập đủ thông tin';
// }
// if (move_uploaded_file($_FILES['image4']['tmp_name'], $target_dir)) {
// 	echo json_encode([
//       "Message" => "the file has been uploaded",
//       "Status" => "OK"
// 	]);
// }else{
// 	echo json_encode([
//       "Message" => "sorry",
//       "Status" => "error"
// 	]);
// }
// }
// }

?>
	
  
 