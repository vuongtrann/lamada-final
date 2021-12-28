<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSNV'])?$_POST['MSNV']:'';
$t = isset($_POST['TenNV'])?$_POST['TenNV']:'';
$x = isset($_POST['MKhau'])?$_POST['MKhau']:'';
$s = isset($_POST['SDT'])?$_POST['SDT']:'';
$a = isset($_POST['MSQH'])?$_POST['MSQH']:'';
$b = isset($_POST['NgaySinh'])?$_POST['NgaySinh']:'';
$c = isset($_POST['GioiTinh'])?$_POST['GioiTinh']:'';
$d = isset($_POST['DiaChi'])?$_POST['DiaChi']:'';

$sql="update NHANVIEN set TenNV=?, MKhau=?, SDT=?, MSQH=?, NgaySinh=? ,GioiTinh=? ,DiaChi=? where MSNV=?  ";
$a =[ $t, $x, $s, $a, $b, $c, $d, $m];
$objStatement= $objPDO->prepare($sql);
$objStatement->execute($a);
$n = $objStatement->rowCount();

header('location:nhanvien.php');