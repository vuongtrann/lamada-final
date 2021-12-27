<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSLSP'])?$_POST['MSLSP']:'';
$t = isset($_POST['TenLoai'])?$_POST['TenLoai']:'';

$sql="update LOAISANPHAM set TenLoai=? where MSLSP=?  ";
$a =[ $t, $m];
$objStatement= $objPDO->prepare($sql);
$objStatement->execute($a);
$n = $objStatement->rowCount();

header('location:loaiSanPham.php');