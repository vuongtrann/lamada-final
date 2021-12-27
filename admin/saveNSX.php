<?php
include './db_connect/pdo.php';
$m = isset($_POST['MSNSX']) ? $_POST['MSNSX'] : '';
$t = isset($_POST['TenNSX']) ? $_POST['TenNSX'] : '';
$x = isset($_POST['XuatSu']) ? $_POST['XuatSu'] : '';
$s = isset($_POST['SDT']) ? $_POST['SDT'] : '';


if ($m != '') {
    $de = false;
    $sql = 'select * from NHASANXUAT';
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
        $sql = "insert into NHASANXUAT (MSNSX, TenNSX, XuatSu, SDT) values (?, ?, ?, ?)";
        $a = [$m, $t, $x, $s];
        $objStatement = $objPDO->prepare($sql);
        $objStatement->execute($a);
        header('location:nhaSanXuat.php');
    } else {
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - Nhà sản xuất đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=nhaSanXuat.php");
    }
}
