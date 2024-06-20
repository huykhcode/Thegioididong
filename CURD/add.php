<?php
$DT = $_POST['TenDT'];
$Gia = $_POST['Gia'];

require_once 'config.php';

$themsql = "INSERT INTO  tbl_dt(Tendt, Gia) values('$DT','$Gia')";
// echo $themsql; exit;

if (mysqli_query($mysqli, $themsql)){
header("location: lietke.php");
}
// echo "thanhcong";
