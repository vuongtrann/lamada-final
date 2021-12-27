<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSLSP'])?$_POST['MSLSP']:'';
$t = isset($_POST['TenLoai'])?$_POST['TenLoai']:'';
// if($m==''){header('location:loaiSanPham.php');exit;}
// $sql="insert into LOAISANPHAM (MSLSP, TenLoai) values('$m', '$t')";
// $a =[ $t, $m];
// $objStatement= $objPDO->prepare($sql);
// $objStatement->execute();
// header('location:loaiSanPham.php');
if($m!=''){
    $de=false;
    $sql='select * from LOAISANPHAM';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach($data as $v){
        if($v->MSLSP==$m){
            $de=true;
            break;
        }
    }
    if($de==false){
        $sql="insert into LOAISANPHAM (MSLSP, TenLoai) values('$m', '$t')";
        $a =[ $m, $t];
        $tam = $objPDO->prepare($sql);
        $tam->execute($a);
        header('location:loaiSanPham.php'); 
    }else{
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - Loại sản phẩm đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=loaiSanPham.php");
    }
}