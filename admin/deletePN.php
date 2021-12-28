<?php
include './db_connect/pdo.php';
$m=isset($_GET['MSPN'])?$_GET['MSPN']:'';
if($m !='')
{
    $sql="delete from PHIEUNHAP where MSPN= ?";
    $a=[$m];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);
    
}

header('location:phieunhap.php');
