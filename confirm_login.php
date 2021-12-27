<?php
include_once './db_connect/config.php';
include './db_connect/pdo.php';
if(!isset($_SESSION)) session_start();
 $u=isset($_POST['MSKH'])?$_POST['MSKH']:'';
 $p=isset($_POST['MKhau'])?$_POST['MKhau']:'';
$sql="select * from KHACHHANG";
$objStatament=$objPDO->prepare($sql);
$objStatament->execute();
$data=$objStatament->fetchALL(PDO::FETCH_OBJ);
foreach($data as $v){
    if($u==$v->MSKH && $p==$v->MKhau){
        $_SESSION['user']=$u;
        header('location:index.php');
        // print_r($p);
        exit;
    }
    
}
echo '<script language="javascript">'; 
echo 'alert("Khách hàng không tồn tại !")';
           
    echo '</script>';
    header( "refresh:0.5;url=login.php" );
