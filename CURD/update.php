<?php
$DT = $_POST['TenDT'];
$Gia = $_POST['Gia'];
$id = $_POST['sid'];
require_once 'config.php';

$updatesql = "UPDATE tbl_dt SET Tendt='$DT', Gia='$Gia' WHERE id=$id";
// echo $updatesql; exit;

mysqli_query($mysqli, $updatesql);
    header("location: lietke.php");
    
// echo "thanhcong";