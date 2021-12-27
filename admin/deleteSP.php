<?php
include './db_connect/pdo.php';
$m=isset($_GET['MSSP'])?$_GET['MSSP']:'';
if($m !='')
{
    $sql="delete from SANPHAM where MSSP= ?";
    $a=[$m];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);
    
}

header('location:index.php');