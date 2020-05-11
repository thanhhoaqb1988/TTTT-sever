<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$mysqli = mysqli_connect("localhost", "root", "", "thanh thi thong thai");
// $mysqli = mysqli_connect("localhost", "id13484131_hoangthanh", "f2uTb50po#[)z{oF", "id13484131_badoket");
$mysqli->set_charset("utf8");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>