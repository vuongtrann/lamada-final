<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSDH'])?$_POST['MSDH']:'';
$t = isset($_POST['MSNV'])?$_POST['MSNV']:'';
$x = isset($_POST['MSKH'])?$_POST['MSKH']:'';
$s = isset($_POST['NgayDat'])?$_POST['NgayDat']:'';
$a = isset($_POST['MSTT'])?$_POST['MSTT']:'';
$b = isset($_POST['NgayGiao'])?$_POST['NgayGiao']:'';
$c = isset($_POST['TongTien'])?$_POST['TongTien']:'';

$sql="update DONHANG set MSNV=?, MSKH=?, NgayDat=?, MSTT=?, NgayGiao=?, TongTien=? where MSDH=?  ";
$a =[ $t, $x, $s, $a, $b, $c, $m];
$objStatement= $objPDO->prepare($sql);
$objStatement->execute($a);
$n = $objStatement->rowCount();

header('location:donhang.php');