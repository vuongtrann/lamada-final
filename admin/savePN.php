<?php
include './db_connect/pdo.php';
$m = isset($_POST['MSPN'])?$_POST['MSPN']:'';
$t = isset($_POST['MSSP'])?$_POST['MSSP']:'';
$x = isset($_POST['MSNV'])?$_POST['MSNV']:'';
$s = isset($_POST['Gia'])?$_POST['Gia']:'';
$a = isset($_POST['TongTien'])?$_POST['TongTien']:'';
$b = isset($_POST['SoLuong'])?$_POST['SoLuong']:'';
$c = isset($_POST['NgayNhap'])?$_POST['NgayNhap']:'';

if ($m != '') {
    $de = false;
    $sql = 'select * from PHIEUNHAP';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MSPN == $m) {
            $de = true;
            break;
        }
    }
    if ($de == false) {
        $sql = "insert into PHIEUNHAP (MSPN, MSSP, MSNV, Gia,TongTien,SoLuong, NgayNhap) values ('$m', '$t', '$x', '$s', '$a', '$b', '$c')";
        $a = [$m, $t, $x, $s, $a, $b, $c];
        $objStatement = $objPDO->prepare($sql);
        $objStatement->execute($a);
        header('location:phieunhap.php');
    } else {
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - Phiếu nhập đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=phieunhap.php");
    }
}
