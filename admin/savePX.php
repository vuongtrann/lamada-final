<?php
include './db_connect/pdo.php';
$m = isset($_POST['MSPN'])?$_POST['MSPN']:'';
$t = isset($_POST['MSSP'])?$_POST['MSSP']:'';
$x = isset($_POST['MSNV'])?$_POST['MSNV']:'';
$b = isset($_POST['SoLuong'])?$_POST['SoLuong']:'';
$s = isset($_POST['Gia'])?$_POST['Gia']:'';
$a = isset($_POST['TongTien'])?$_POST['TongTien']:'';
$c = isset($_POST['NgayXuat'])?$_POST['NgayXuat']:'';

if ($m != '') {
    $de = false;
    $sql = 'select * from PHIEUXUAT';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MSPX == $m) {
            $de = true;
            break;
        }
    }
    if ($de == false) {
        $sql = "insert into PHIEUXUAt (MSPN, MSSP, MSNV, SoLuong,Gia,TongTien,, NgayNhap) values ('$m', '$t', '$x', '$b','$s', '$a', '$c')";
        $a = [$m, $t, $x,$b ,$s, $a, $c];
        $objStatement = $objPDO->prepare($sql);
        $objStatement->execute($a);
        header('location:phieuxuat.php');
    } else {
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - Phiếu xuất đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=phieuxuat.php");
    }
}
