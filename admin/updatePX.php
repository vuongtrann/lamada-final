<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSPX'])?$_POST['MSPX']:'';
$t = isset($_POST['MSSP'])?$_POST['MSSP']:'';
$x = isset($_POST['MSNV'])?$_POST['MSNV']:'';
$b = isset($_POST['SoLuong'])?$_POST['SoLuong']:'';
$s = isset($_POST['Gia'])?$_POST['Gia']:'';
$a = isset($_POST['TongTien'])?$_POST['TongTien']:'';
$c = isset($_POST['NgayXuat'])?$_POST['NgayXuat']:'';

$sql="update PHIEUXUAT set MSSP=?, MSNV=?, SoLuong=?, Gia=?, TongTien=?, NgayXuat=? where MSPX=?  ";
$a =[ $t, $x,  $b, $s, $a, $c, $m];
$objStatement= $objPDO->prepare($sql);
$objStatement->execute($a);
$n = $objStatement->rowCount();

header('location:phieuxuat.php');