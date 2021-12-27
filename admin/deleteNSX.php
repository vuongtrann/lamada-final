<?php
include './db_connect/pdo.php';
$m = isset($_GET['MSNSX']) ? $_GET['MSNSX'] : '';
if ($m != '') {
    $de = false;
    $sql = 'select * from SANPHAM';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MSNSX == $m) {


            $de = true;

            break;
        }
    }

    if ($de == false) {
        $sql = "delete from NHASANXUAT where MSNSX= ?";
        $a = [$m];
        $tam = $objPDO->prepare($sql);
        $tam->execute($a);
        header('location:nhaSanXuat.php');
    } else {


        echo '<script language="javascript">';
        echo 'alert("Không thể xóa vì nhà sản xuất còn tồn tại trong sản phẩm")';
        echo '</script>';
        header("refresh:0.5;url=nhaSanXuat.php");
    }
}
