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
// if($m==''){header('location:loaiSanPham.php');exit;}
// $sql="insert into LOAISANPHAM (MSLSP, TenLoai) values('$m', '$t')";
// $a =[ $t, $m];
// $objStatement= $objPDO->prepare($sql);
// $objStatement->execute();
// header('location:loaiSanPham.php');
if($m!=''){
    $de=false;
    $sql='select * from NHANVIEN';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach($data as $v){
        if($v->MSNV==$m){
            $de=true;
            break;
        }
    }
    if($de==false){
        $sql="insert into NHANVIEN (MSNV, TenNV,MKhau,SDT,MSQH,NgaySinh,GioiTinh,DiaChi) values('$m','$t', '$x', '$s', '$a', '$b', '$c', '$d')";
        $a =[ $m,$t, $x, $s, $a, $b, $c, $d];
        $tam = $objPDO->prepare($sql);
        $tam->execute($a);
        header('location:nhanvien.php'); 
    }else{
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - nhân viên đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=nhanvien.php");
    }
}