<?php
$svid = $_GET['sid'];
require_once 'config.php';
$xoa_sql = "DELETE FROM tbl_dt WHERE id=$svid";

mysqli_query($mysqli, $xoa_sql);
echo"xoa thanh cong";
header("location: lietke.php");