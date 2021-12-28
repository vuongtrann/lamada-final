<?php
include './db_connect/pdo.php';
$m=isset($_GET['MSNV'])?$_GET['MSNV']:'';
if($m !='')
{
    $sql="delete from NHANVIEN where MSNV= ?";
    $a=[$m];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);
    
}

header('location:nhanvien.php');