<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSPN'])?$_POST['MSPN']:'';
$t = isset($_POST['MSSP'])?$_POST['MSSP']:'';
$x = isset($_POST['MSNV'])?$_POST['MSNV']:'';
$s = isset($_POST['Gia'])?$_POST['Gia']:'';
$a = isset($_POST['TongTien'])?$_POST['TongTien']:'';
$b = isset($_POST['SoLuong'])?$_POST['SoLuong']:'';
$c = isset($_POST['NgayNhap'])?$_POST['NgayNhap']:'';

$sql="update PHIEUNHAP set MSSP=?, MSNV=?, Gia=?, TongTien=?, SoLuong=?, NgayNhap=? where MSPN=?  ";
$a =[ $t, $x, $s, $a, $b, $c, $m];
$objStatement= $objPDO->prepare($sql);
$objStatement->execute($a);
$n = $objStatement->rowCount();

header('location:phieunhap.php');