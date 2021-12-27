<?php
include './db_connect/pdo.php';
$m = isset($_GET['MSLSP']) ? $_GET['MSLSP'] : '';
if ($m != '') {
    $de = false;
    $sql = 'select * from SANPHAM';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MSLSP == $m) {


            $de = true;

            break;
        }
    }

    if ($de == false) {
        $sql = "delete from LOAISANPHAM where MSLSP= ?";
        $a = [$m];
        $tam = $objPDO->prepare($sql);
        $tam->execute($a);
        header('location:loaiSanPham.php');
    } else {


        echo '<script language="javascript">';
        echo 'alert("Không thể xóa mã khi có sản phẩm")';
        echo '</script>';
        header("refresh:0.5;url=loaiSanPham.php");
    }
}
