<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSNSX'])?$_POST['MSNSX']:'';
$t = isset($_POST['TenNSX'])?$_POST['TenNSX']:'';
$x = isset($_POST['XuatSu'])?$_POST['XuatSu']:'';
$s = isset($_POST['SDT'])?$_POST['SDT']:'';

$sql="update NHASANXUAT set TenNSX=?, XuatSu=?, SDT=? where MSNSX=?  ";
$a =[ $t, $x, $s,$m];
$objStatement= $objPDO->prepare($sql);
$objStatement->execute($a);
$n = $objStatement->rowCount();

header('location:nhaSanXuat.php');