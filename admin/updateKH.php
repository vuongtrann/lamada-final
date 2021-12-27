<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSKH'])?$_POST['MSKH']:'';
$t = isset($_POST['TenKH'])?$_POST['TenKH']:'';
$x = isset($_POST['DiaChi'])?$_POST['DiaChi']:'';
$s = isset($_POST['SDT'])?$_POST['SDT']:'';

$sql="update KHACHHANG set TenKH=?, DiaChi=?, SDT=? where MSKH=?  ";
$a =[ $t, $x, $s,$m];
$objStatement= $objPDO->prepare($sql);
$objStatement->execute($a);
$n = $objStatement->rowCount();

header('location:khachHang.php');